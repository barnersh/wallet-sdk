<?php

namespace Elvis\WalletSdk\Managers\DepositManager;

use Elvis\WalletSdk\Managers\DepositManager;
use Illuminate\Support\ServiceProvider;

class WalletServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('wallet-sdk-deposit', function () {
            return new DepositManager;
        });
    }
}