<?php

namespace Elvis\WalletSdk\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Transaction extends Model
{
    abstract public function markAsConfirm();
    abstract public function getSuccessStatus();

    public function status($column = 'status')
    {
        return $this->getAttribute($column);
    }

    public function toWalletAddress($column = 'to_wallet_address')
    {
        return $this->getAttribute($column);
    }

    public function amount($column = 'amount')
    {
        return $this->getAttribute($column);
    }

    public function belongDepositId($column = 'belong_deposit_id')
    {
        return $this->getAttribute($column);
    }
}