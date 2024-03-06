<?php

namespace Elvis\WalletSdk\Facades;

use Elvis\WalletSdk\Managers\BcmathManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static add($left, $right, $scale = BcmathManager::SCALE)
 * @method static sub($left, $right, $scale = BcmathManager::SCALE)
 * @method static subMinZero($left, $right, $scale = BcmathManager::SCALE)
 * @method static ltZero($left, $scale = BcmathManager::SCALE)
 * @method static lteZero($left, $scale = BcmathManager::SCALE)
 * @method static mulPercent($left, $right, $scale = BcmathManager::SCALE)
 * @method static mul($left, $right, $scale = BcmathManager::SCALE)
 * @method static negativeOf($left, $scale = BcmathManager::SCALE)
 * @method static notEq($left, $right, $scale = BcmathManager::SCALE)
 * @method static positiveOf($left, $scale = BcmathManager::SCALE)
 * @method static div($left, $right, $scale = BcmathManager::SCALE)
 * @method static gte($left, $right, $scale = BcmathManager::SCALE)
 * @method static gtZero($left, $scale = BcmathManager::SCALE)
 * @method static lt($left, $right, $scale = BcmathManager::SCALE)
 * @method static between($amount, $left, $right, $scale = BcmathManager::SCALE)
 * @method static truncate($amount)
 * @method static gt($left, $right, $scale = BcmathManager::SCALE)
 * @method static pow($num, $exponent, $scale = BcmathManager::SCALE)
 *
 * @see BcmathManager
 */
class BcmathFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'facade.bcmath';
    }
}