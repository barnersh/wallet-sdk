<?php

namespace Elvis\WalletSdk\Managers;

use Brick\Math\BigDecimal;
use Elvis\WalletSdk\Exceptions\WalletManagerException;
use Elvis\WalletSdk\Facades\BcmathFacade;
use Elvis\WalletSdk\Models\AuthorizedUser;
use Elvis\WalletSdk\Models\Ledger;
use Elvis\WalletSdk\Models\Order;
use Elvis\WalletSdk\Models\Wallet;
use Illuminate\Support\Facades\DB;

class WalletManager
{
    //todo deposit
    //todo depositProfit
    //todo updateBalance
    //todo withdraw
    //todo withdrawProfit
    public function withdrawRollback(
        Wallet $wallet,
        $amount,
        $fee,
        $ledgerClass,
        $transactionFee = null,
        ?AuthorizedUser $operator = null,
        ?Order $order = null,
        $note = null
    ): Wallet
    {
        throw_if(
            DB::transactionLevel() === 0,
            WalletManagerException::class,
            'WalletManager require transaction'
        );

        throw_if(
            !is_subclass_of($ledgerClass, Ledger::class),
            WalletManagerException::class,
            'ledger class not inherit Ledger'
        );

        $transactionFee = $transactionFee ?? 0;
        $orderDecimals = $order->getCoin()->decimals();

        $income = BcmathFacade::add(
            BcmathFacade::add(
                BcmathFacade::positiveOf($amount, $orderDecimals),
                BcmathFacade::positiveOf($fee, $orderDecimals),
                $orderDecimals
            ),
            BcmathFacade::positiveOf($transactionFee, $orderDecimals),
            $orderDecimals
        );

        /** @var Wallet $wallet */
        $wallet = $wallet->lockForUpdate()->findOrFail($wallet->getKey());

        $ledgerClass::create([
            'team_id'     => $wallet->teamId(),
            'wallet_id'   => $wallet->getKey(),
            'operator_id' => $operator ? $operator->getAuthorizedUser()->getKey() : $ledgerClass::getDefaultOperator(),
            'type'        => $ledgerClass::getWithdrawRollback(),
            'order_type'  => $order::class,
            'order_id'    => $order->getKey(),
            'delta'       => [
                'balance' => BcmathFacade::positiveOf($amount, $orderDecimals),
            ],
            'result'      => [
                'balance' => BcmathFacade::add($wallet->balance(), BcmathFacade::positiveOf($amount, $orderDecimals), $orderDecimals),
            ],
            'note'        => $note,
        ]);

        $feeInNote = BigDecimal::of($fee)->stripTrailingZeros();
        $transactionFeeInNote = BigDecimal::of($transactionFee)->stripTrailingZeros();

        $ledgerClass::create([
            'team_id'     => $wallet->teamId(),
            'wallet_id'   => $wallet->getKey(),
            'operator_id' => $operator ? $operator->getAuthorizedUser()->getKey() : $ledgerClass::getDefaultOperator(),
            'type'        => $ledgerClass::getWithdrawRollback(),
            'order_type'  => $order::class,
            'order_id'    => $order->getKey(),
            'delta'       => [
                'balance' => BcmathFacade::add(
                    BcmathFacade::positiveOf($fee, $orderDecimals), BcmathFacade::positiveOf($transactionFee, $orderDecimals),
                    $orderDecimals
                ),
            ],
            'result'      => [
                'balance' => BcmathFacade::add($wallet->balance(), $income, $orderDecimals),
            ],
            'note'        => $note . " 手续费 $feeInNote 链上手续费 $transactionFeeInNote",
        ]);

        $wallet->update([
            'balance' => BcmathFacade::add($wallet->balance(), $income, $orderDecimals),
        ]);

        return $wallet;
    }
}