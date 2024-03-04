<?php

namespace Elvis\WalletSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static manualConfirm()
 */
class DepositFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wallet-sdk-deposit';
    }
}