<?php

namespace Elvis\WalletSdk;

use Elvis\WalletSdk\Managers\BcmathManager;
use Elvis\WalletSdk\Managers\DepositManager;
use Elvis\WalletSdk\Managers\OrderManager;
use Elvis\WalletSdk\Managers\WalletManager;
use Illuminate\Support\ServiceProvider;

class WalletServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('facade.bcmath', function () {
            return new BcmathManager();
        });

        $this->app->bind('facade.wallet', function () {
            return new WalletManager();
        });

        $this->app->bind('facade.order', function () {
            return new OrderManager();
        });

        $this->app->bind('facade.deposit', function () {
            return new DepositManager();
        });
    }
}