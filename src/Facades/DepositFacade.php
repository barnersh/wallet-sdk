<?php

namespace Elvis\WalletSdk\Facades;

use Elvis\WalletSdk\Managers\DepositManager;
use Elvis\WalletSdk\Models\Order;
use Elvis\WalletSdk\Models\Transaction;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Facade;

/**
 * @method static manualConfirm(Order $deposit, $status, $amount = null, ?Transaction $transaction = null): Order
 *
 * @see DepositManager
 */
class DepositFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'facade.deposit';
    }
}