<?php

namespace Elvis\WalletSdk\Facades;

use Elvis\WalletSdk\Managers\WalletManager;
use Elvis\WalletSdk\Models\AuthorizedUser;
use Elvis\WalletSdk\Models\Order;
use Elvis\WalletSdk\Models\Wallet;
use Illuminate\Support\Facades\Facade;

/**
 * @method withdrawRollback(Wallet $wallet, $amount, $fee, $ledgerClass, $transactionFee = null, ?AuthorizedUser $operator = null, ?Order $order = null, $note = null): Wallet
 *
 * @see WalletManager
 */
class WalletFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'facade.wallet';
    }
}