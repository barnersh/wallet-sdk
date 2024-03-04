<?php

namespace Elvis\WalletSdk\Managers;

use Illuminate\Database\Schema\Blueprint;

class DepositManager
{
    public function createColumns(Blueprint $table)
    {
        $table->unsignedBigInteger('depend_deposit_id')->nullable();
        $table->unsignedBigInteger('user_id');
        $table->unsignedInteger('client_ipv4')->nullable();
        $table->unsignedTinyInteger('status');
        $table->unsignedTinyInteger('notify_status');
        $table->string('chain', 20);
        $table->string('coin', 20);
        $table->string('to_wallet_address', 50)->nullable();
        $table->string('order_number', 100);
        $table->string('transaction_hash', 100)->nullable();
        $table->unsignedDecimal('amount', 30, 18);
        $table->unsignedDecimal('fee', 30, 18);
        $table->unsignedDecimal('fee_fixed', 30, 18);
        $table->decimal('fee_rate', 6, 2)->nullable();
        $table->string('notify_url')->nullable();
        $table->string('note', 100)->nullable();
        $table->timestamp('confirmed_at')->nullable();
        $table->timestamp('matched_at')->nullable();
        $table->timestamp('notified_at')->nullable();
    }
}