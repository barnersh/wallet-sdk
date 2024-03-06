<?php

namespace Elvis\WalletSdk\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Wallet extends Model
{
    abstract function scopeWithOrder($query, $order);
    abstract function getSystemOperatorType();
    abstract function getWithdrawRollbackType();
    public function team($relation)
    {
        return $this->belongsTo($relation);
    }

    public function teamId($column = 'team_id')
    {
        return $this->getAttribute($column);
    }

    public function balance($column = 'balance')
    {
        return $this->getAttribute($column);
    }
}