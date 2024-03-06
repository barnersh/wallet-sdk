<?php

namespace Elvis\WalletSdk\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

abstract class Ledger extends Model
{
    abstract public function wallet(): BelongsTo;
    abstract public function team(): BelongsTo;
    abstract static function getDefaultOperator();
    abstract static function getWithdrawRollback();
}