<?php

namespace Elvis\WalletSdk\Facades;

use Elvis\WalletSdk\Managers\OrderManager;
use Elvis\WalletSdk\Models\Order;
use Elvis\WalletSdk\Models\Transaction;
use Illuminate\Support\Facades\Facade;

/**
 * @method static markDepositAsConfirmed(Order $deposit, Transaction $transaction, $status): Order
 * @method static markDepositAsConfirmedWithAmount(Order $deposit, $status, $amount = null): Order
 * @method static calculateFee(Order $deposit, $amount)
 * @method static markWithdrawAsConfirmed(Order $withdraw, $status, ?Transaction $transaction = null,): Order
 * @method static markWithdrawAsFailed(Order $withdraw): Order
 * @method static updateWallet(Order $deposit): void
 *
 * @see OrderManager
 */
class OrderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'facade.order';
    }
}