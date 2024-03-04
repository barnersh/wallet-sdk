<?php

namespace Elvis\WalletSdk\Facades;

use Elvis\WalletSdk\Managers\DepositManager;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Facade;

/**
 * @method static createColumns(Blueprint $table)
 *
 * @see DepositManager
 */
class DepositFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wallet-sdk-deposit';
    }
}