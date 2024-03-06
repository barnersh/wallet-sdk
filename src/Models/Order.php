<?php

namespace Elvis\WalletSdk\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

abstract class Order extends Model
{

    abstract public function getSystemOrderNumberAttribute();

    abstract public function orderNumber();

    abstract public function markAsConfirmed(?Transaction $transaction = null);

    abstract public function markAsFailed();

    abstract public function availableForConfirmation(): bool;

    abstract public function getFailedStatus();

    abstract public function transaction(): BelongsTo;

    public function toWalletAddress($column = 'to_wallet_address')
    {
        return $this->getAttribute($column);
    }

    public function fromWalletAddress($column = 'from_wallet_address')
    {
        return $this->getAttribute($column);
    }

    public function feeRate($column = 'fee_rate')
    {
        return $this->getAttribute($column);
    }

    public function fee($column = 'fee')
    {
        return $this->getAttribute($column);
    }

    public function transactionFee($column = 'transaction_fee')
    {
        return $this->getAttribute($column);
    }

    public function teamId($column = 'team_id')
    {
        return $this->getAttribute($column);
    }

    public function amount()
    {
        return $this->getAttribute('amount');
    }

    public function status()
    {
        return $this->getAttribute('status');
    }

    public function systemOrderNumber()
    {
        return $this->getAttribute('system_order_number');
    }

    public function transactionHash()
    {
        return $this->getAttribute('transaction_hash');
    }

    /**
     * @return CoinInterface
     */
    public function getCoin()
    {
        return ($this->getChain()->getChainCoin())::tryFrom($this->getAttribute('coin'));
    }

    public function getChain()
    {
        return $this->getAttribute('chain');
    }
}