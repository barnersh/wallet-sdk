<?php

return [
    'title' => 'Transaction',

    'widgets' => [
        'amount' => ':coin Amount',
    ],

    'table' => [
        'chain'               => 'Chain',
        'transaction_hash'    => 'Transaction Hash',
        'from_wallet_address' => 'From Wallet Address',
        'to_wallet_address'   => 'To Wallet Address',
        'amount'              => 'Amount',
        'status'              => 'Status',
        'block_created_at'    => 'Block Created At',
        'search_online'       => 'Search Online',
        'transfer_type'       => 'Transfer Type',
        'block_created_from'  => 'Block Created From',
        'block_created_to'    => 'Block Created To',
    ],

    'fail' => [
        'invalid_hash' => 'Invalid Hash',
        'not_found'    => 'Not Found',
    ],
];
