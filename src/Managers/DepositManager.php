<?php

namespace Elvis\WalletSdk\Managers;

use Elvis\WalletSdk\Exceptions\DepositManagerException;
use Elvis\WalletSdk\Facades\OrderFacade;
use Elvis\WalletSdk\Models\Order;
use Elvis\WalletSdk\Models\Transaction;

class DepositManager
{
    /**
     * @param Order $deposit
     * @param null $amount
     * @param Transaction|null $transaction
     * @return Order|null
     */
    public function manualConfirm(Order $deposit, $status, $amount = null, ?Transaction $transaction = null): Order
    {
        if ($amount) {
            throw_if(
                !$deposit->getCoin()->isValidAmount($amount),
                DepositManagerException::class,
                'Invalid Amount'
            );

            return OrderFacade::markDepositAsConfirmedWithAmount($deposit, $status, $amount);
        }

        if ($transaction) {
            return OrderFacade::markDepositAsConfirmed($deposit, $transaction, $status);
        }

        throw new DepositManagerException('Wrong manual confirm');
    }

    //todo makeEmpty method
}