<?php

namespace Elvis\WalletSdk;

use Elvis\WalletSdk\Managers\DepositManager;
use Illuminate\Support\ServiceProvider;

class WalletServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'wallet-sdk');

        $this->app->singleton('wallet-sdk-deposit', function () {
            return new DepositManager();
        });
    }
}