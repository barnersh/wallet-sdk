<?php

return [
    'title' => 'System Withdraw',

    'widgets' => [
        'amount' => ':coin Amount',
    ],

    'table' => [
        'system_order_number' => 'System Order Number',
        'transaction_hash'    => 'Transaction Hash',
        'transaction_status'  => 'Transaction Status',
        'from_wallet_address' => 'From Wallet Address',
        'to_wallet_address'   => 'To Wallet Address',
        'amount'              => 'Amount',
        'type'                => 'Type',
        'status'              => 'Status',
        'created_at'          => 'Created At',
        'matched_at'          => 'Matched At',
        'confirmed_at'        => 'Confirmed At',
        'created_from'        => 'Created From',
        'created_to'          => 'Created To',
    ],

    'view' => [
        'copy_image'             => 'Copy Image',
        'withdraw_has_submitted' => 'Withdraw has submitted',
        'system_is_processing'   => 'System is processing',
        'withdraw_success'       => 'Withdraw success',
        'chain'                  => 'Chain',
        'system_order_number'    => 'System Order Number',
        'order_number'           => 'Order Number',
        'transaction_hash'       => 'Transaction Hash',
    ],

    'action' => [
        'receipt' => 'Receipt',
        'close'   => 'Close',
    ],
];
