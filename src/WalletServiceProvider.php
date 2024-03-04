<?php

namespace Elvis\WalletSdk;

use Illuminate\Support\ServiceProvider;

class WalletServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('wallet-sdk-deposit', function () {
            return new DepositManager();
        });
    }
}