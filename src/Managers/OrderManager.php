<?php

namespace Elvis\WalletSdk\Managers;

use Carbon\Carbon;
use Elvis\WalletSdk\Exceptions\OrderManagerException;
use Elvis\WalletSdk\Facades\BcmathFacade;
use Elvis\WalletSdk\Facades\WalletFacade;
use Elvis\WalletSdk\Models\Order;
use Elvis\WalletSdk\Models\Transaction;
use Elvis\WalletSdk\Models\Wallet;
use Illuminate\Support\Facades\DB;

class OrderManager
{
    public function markDepositAsConfirmed(
        Order $deposit,
        Transaction $transaction,
        $status
    ): Order
    {
        $deposit = DB::transaction(function () use ($deposit, $transaction, $status) {
            /** @var Order $deposit */
            $deposit = $deposit->lockForUpdate()->find($deposit->getKey());

            throw_if(
                !$deposit->availableForConfirmation(),
                OrderManagerException::class,
                'Status not confirmable'
            );

            /** @var Transaction $transaction */
            $transaction = $transaction->lockForUpdate()->find($transaction->getKey());

            throw_if(
                $transaction->status() !== $transaction->getSuccessStatus(),
                OrderManagerException::class,
                'Transaction status is not confirmable'
            );

            throw_if(
                strcasecmp($transaction->toWalletAddress(), $deposit->toWalletAddress()),
                OrderManagerException::class,
                'Transaction receiver address is not equal to deposit'
            );

            $deposit->update([
                'amount'           => $transaction->amount(),
                'fee'              => BcmathFacade::mulPercent(
                    $transaction->amount(), $deposit->feeRate(), $deposit->getCoin()->decimals()
                ),
                'status'           => $status,
                'confirmed_at'     => Carbon::now(),
                'transaction_hash' => optional($transaction)->transaction_hash ?? $deposit->transactionHash(),
            ]);

            $transaction->markAsConfirm();

            if ($transaction->belongDepositId() !== $deposit->getKey()) {
                $transaction->update([
                    'belong_deposit_id' => $deposit->getKey(),
                ]);
            }

            /** @var Wallet $wallet */
            $this->updateWallet($deposit);

            return $deposit;
        });

        return $deposit;
    }

    public function markDepositAsConfirmedWithAmount(
        Order $deposit,
        $status,
        $amount = null
    ): Order
    {
        $deposit = DB::transaction(function () use ($deposit, $amount, $status) {
            /** @var Order $deposit */
            $deposit = $deposit->lockForUpdate()->find($deposit->getKey());

            throw_if(
                !$deposit->availableForConfirmation(),
                OrderManagerException::class,
                'Status not confirmable'
            );


            if ($amount) {
                $deposit->update([
                    'amount'           => $amount,
                    'fee'              => $this->calculateFee($deposit, $amount),
                    'status'           => $status,
                    'confirmed_at'     => Carbon::now(),
                    'transaction_hash' => null,
                ]);
            } else {
                throw_if(
                    is_null($deposit->amount()),
                    OrderManagerException::class,
                    'Deposit amount is null'
                );


                $deposit->update([
                    'fee'              => $this->calculateFee($deposit, $deposit->amount()),
                    'status'           => $status,
                    'confirmed_at'     => Carbon::now(),
                    'transaction_hash' => null,
                ]);
            }

            $this->updateWallet($deposit);

            return $deposit;
        });

        return $deposit;
    }

    private function calculateFee(Order $deposit, $amount)
    {
        return BcmathFacade::mulPercent(
            $amount, $deposit->feeRate(), $deposit->getCoin()->decimals()
        );
    }

    public function markWithdrawAsConfirmed(
        Order $withdraw,
        $status,
        ?Transaction $transaction = null,
    ): Order
    {
        $withdraw = DB::transaction(function () use ($withdraw, $transaction, $status) {
            /** @var Order $withdraw */
            $withdraw = $withdraw->lockForUpdate()->find($withdraw->getKey());

            throw_if(
                !$withdraw->availableForConfirmation(),
                OrderManagerException::class,
                'Status not confirmable'
            );

            if ($transaction) {
                /** @var Transaction $transaction */
                $transaction = $transaction->lockForUpdate()->find($transaction->getKey());

                // 如果下面檢查沒有拿掉會導致無法自動成功
                throw_if(
                    $transaction->status() !== $transaction->getSuccessStatus(),
                    OrderManagerException::class,
                    'Transaction status is not confirmable'
                );

                throw_if(
                    strcasecmp($transaction->toWalletAddress(), $withdraw->toWalletAddress()),
                    OrderManagerException::class,
                    'Transaction receiver address is not equal to deposit'
                );

                $transaction->markAsConfirm();
            }

            $withdraw->update([
                'status'           => $status,
                'confirmed_at'     => Carbon::now(),
                'transaction_hash' => optional($transaction)->transaction_hash ?? $withdraw->transactionHash(),
            ]);

            //todo Profit Manager
            ProfitManager::settleWithdrawProfit($withdraw);

            return $withdraw;
        });

        return $withdraw;
    }

    public function markWithdrawAsFailed(Order $withdraw, $operatorId, $ledgerClass): Order
    {
        return DB::transaction(function () use ($withdraw, $operatorId, $ledgerClass) {
            /** @var Order $withdraw */
            $withdraw = $withdraw->lockForUpdate()->find($withdraw->getKey());

            throw_if(
                !$withdraw->availableForConfirmation(),
                OrderManagerException::class,
                'Status not confirmable'
            );

            $withdraw->update(
                [
                    'status' => $withdraw->getFailedStatus(),
                ]
            );

            /** @var Wallet $wallet */
            $wallet = Wallet::byOrder($withdraw)->first();


            WalletFacade::withdrawRollback(
                $wallet,
                $withdraw->amount(),
                $withdraw->fee(),
                $withdraw->transactionFee(),
                $operatorId,
                $ledgerClass,
                $withdraw,
                $withdraw->systemOrderNumber()
            );

            if ($withdraw->fromWalletAddress()) {
                // todo blochkchain wallet
                $blockWallet = BlockchainWallet::where('address', $withdraw->fromWalletAddress())->first();

                throw_if(
                    !$blockWallet,
                    OrderManagerException::class,
                    'System wallet not found'
                );
            }

            return $withdraw;
        });
    }

    private function updateWallet(Order $deposit): void
    {
        /** @var Wallet $wallet */
        $wallet = Wallet::byOrder($deposit)->first();

        //todo wallet manager
        WalletManager::deposit(
            $wallet,
            $deposit->amount,
            $deposit->fee + $deposit->fee_fixed,
            Filament::auth()->user(),
            $deposit,
            $deposit->system_order_number
        );

        //todo profit manager
        ProfitManager::settleDepositProfit($deposit);
    }
}