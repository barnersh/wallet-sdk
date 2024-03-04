<?php

return [
    'title' => 'Withdraw',

    'widgets' => [
        'amount' => ':coin Amount',
        'fee'    => ':coin Fee',
    ],

    'table' => [
        'team_name'           => 'Team Name',
        'system_order_number' => 'System Order Number',
        'order_number'        => 'Order Number',
        'type'                => 'Type',
        'status'              => 'Status',
        'transaction_status'  => 'Transaction Status',
        'amount'              => 'Amount',
        'fee'                 => 'Fee',
        'confirmed_at'        => 'Confirmed At',
        'matched_at'          => 'Matched At',
        'created_at'          => 'Created At',
        'notify_status'       => 'Notify Status',
        'notify_at'           => 'Notify At',
        'created_from'        => 'Created From',
        'created_to'          => 'Created To',
        'ip'                  => 'IP',
        'from_wallet_address' => 'From Wallet Address',
        'to_wallet_address'   => 'To Wallet Address',
        'transaction_hash'    => 'Transaction Hash',
    ],

    'button' => [
        'withdraw_audit'        => 'Withdraw Audit',
        'withdraw_audit_submit' => 'Withdraw Audit Submit',
        'notify'                => 'Notify',
        'withdraw'              => 'Withdraw',
        'rollback'              => 'Rollback',
        'resend'                => 'Resend',
        'manual_success'        => 'Manual Success',
    ],

    'notification' => [
        'withdraw_audit_success'      => 'Withdraw Audit Success',
        'blockchain_wallet_not_found' => 'Blockchain Wallet Not Found',
        'success'                     => 'Notify Success',
        'withdraw_success'            => 'Withdraw Success',
        'rollback_success'            => 'Rollback Success',
        'resend_success'              => 'Resend Success',
        'error_please_contact_admin'  => 'Error, Please Contact Admin',
        'insufficient_balance'        => 'Insufficient Balance',
    ],

    'view' => [
        'withdraw_audit' => [
            'title'                     => 'Withdraw',
            'team_name'                 => 'Team Name',
            'merchant_number'           => 'Merchant Number',
            'channel'                   => 'Channel',
            'system_order_number'       => 'System Order Number',
            'order_number'              => 'Order Number',
            'to_wallet_address'         => 'To Wallet Address',
            'blockchain_wallet_address' => 'Blockchain Wallet Address',
            'usdt_balance'              => 'USDT Balance',
            'trx_balance'               => 'TRX Balance',
            'amount'                    => 'Amount',
            'type'                      => 'Type',
        ],
    ],

    'form' => [
        'withdraw' => [
            'usdt_balance'       => 'USDT Balance',
            'usdt_amount'        => 'Amount(USDT)',
            'withdraw_fixed_fee' => 'Withdraw Fixed Fee',
            'total_amount'       => 'Total Amount',
            'address'            => 'Address',
        ],
    ],

    'fail' => [
        'insufficient_balance' => 'Insufficient Balance',
        'invalid_amount'       => 'Invalid Amount',
        'invalid_address'      => 'Invalid Address',
    ],
];
