<?php

namespace Elvis\WalletSdk\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

abstract class Order extends Model
{

    abstract public function getSystemOrderNumberAttribute();

    abstract public function orderNumber();

    abstract public function markAsConfirmed(?TransactionInterface $transaction = null);

    abstract public function markAsFailed();

    abstract public function availableForConfirmation(): bool;

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

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'transaction_hash', 'transaction_hash');
    }

    public function getTransactionHash()
    {
        return $this->getAttribute('transaction_hash');
    }

    /**
     * @return CoinInterface|TronCoin
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