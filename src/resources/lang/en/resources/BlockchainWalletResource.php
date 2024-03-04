<?php

return [
    'title' => 'Block Chain Wallet',

    'widgets' => [
        'balance' => ':coin Balance',
    ],

    'table' => [
        'address'            => 'Address',
        'type'               => 'Type',
        'blockchain_balance' => 'Block Chain Balance',
        'fuel_balance'       => 'Fuel Balance',
        'status'             => 'Status',
        'created_at'         => 'Created At',
        'balance'            => ':coin Balance',
    ],

    'form' => [
        'chain'           => 'Chain',
        'type'            => 'Type',
        'amount'          => 'Amount',
        'info'            => 'Info',
        'from_address'    => 'From Address',
        'usdt_balance'    => 'USDT Balance',
        'trx_balance'     => 'TRX Balance',
        'coin'            => 'Coin',
        'to_address'      => 'To Address',
        'transfer_amount' => 'Transfer Amount',
        'google2fa'       => 'Google2fa',
    ],

    'button' => [
        'delete'                    => 'Delete',
        'active-collection'         => 'Active Collection',
        'active-collection Success' => 'Active Collection Success',
        'transfer'                  => 'Transfer',
    ],

    'notification' => [
        'transfer_success' => 'Transfer Success',
    ],
];
