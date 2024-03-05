<?php

namespace Elvis\WalletSdk\Managers;

use Elvis\WalletSdk\Exceptions\DepositManagerException;
use Elvis\WalletSdk\Models\Order;
use Elvis\WalletSdk\Models\TransactionInterface;
use Illuminate\Database\Schema\Blueprint;

class DepositManager
{
    /**
     * @param Order $deposit
     * @param null $amount
     * @param TransactionInterface|null $transaction
     * @return Order|null
     */
    public function manualConfirm(Order $deposit, $amount = null, ?TransactionInterface $transaction = null): Order
    {
        if ($amount) {
            throw_if(
                !$deposit->getCoin()->isValidAmount($amount),
                DepositManagerException::class,
                'Invalid Amount'
            );

            //todo call order manager
        }

        if ($transaction) {
            //todo call order manager
        }

        throw new DepositManagerException('Wrong manual confirm');
    }
}