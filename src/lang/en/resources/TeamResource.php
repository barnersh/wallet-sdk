<?php

return [
    'title'          => 'Merchant',
    'merchant_title' => 'Info',

    'widgets' => [
        'Balance' => ':coin Balance',
    ],

    'actions' => [
        'Create Whitelisted Ip' => 'Create Whitelisted Ip',
    ],

    'table' => [
        'name'                               => 'Name',
        'merchant_number'                    => 'Merchant Number',
        'host_username'                      => 'Host Username',
        'parent_name'                        => 'Parent Name',
        'usdt_balance'                       => 'Balance',
        'status'                             => 'Status',
        'deposit_display_fee'                => 'Deposit Fee',
        'withdraw_display_fee'               => 'Withdraw Fee',
        'whitelisted_ip_operator'            => 'Type',
        'whitelisted_ip_operator_user'       => 'Login',
        'whitelisted_ip_operator_api'        => 'API',
        'created_at'                         => 'Created At',
        'whitelisted_ip_empty_state_heading' => 'No Whitelisted Ip',
    ],

    'form' => [
        'name'            => 'Name',
        'merchant_number' => 'Merchant Number',
        'parent_id'       => 'Parent',
        'status'          => 'Status',
    ],

    'exception' => [
        'merchant_number_already_exists' => 'Merchant number already exists.',
    ],

    'infolist' => [
        'name'                   => 'Name',
        'merchant_number'        => 'Merchant Number',
        'host_username'          => 'Host Username',
        'last_login_at'          => 'Last Login At',
        'last_login_ipv4'        => 'Last Login IPv4',
        'parent_name'            => 'Parent Name',
        'usdt_balance'           => 'Balance',
        'user_info'              => 'User Info',
        'function'               => 'Function',
        'wallet'                 => 'Wallet',
        'status'                 => 'Status',
        'withdraw_enable'        => 'Withdraw Enable',
        'agency_withdraw_enable' => 'Agency Withdraw Enable',
        'deposit_enable'         => 'Deposit Enable',
        'deposit_display_fee'    => 'Deposit Fee',
        'withdraw_display_fee'   => 'Withdraw Fee',
        'wallet_history'         => 'Wallet History',
        'update'                 => 'Update',
        'deposit_rate'           => 'Deposit Rate',
        'deposit_fixed_fee'      => 'Deposit Fixed Fee',
        'withdraw_fixed_fee'     => 'Withdraw Fixed Fee',
    ],

    'button' => [
        'wallet_history' => 'Wallet',
        'update_balance' => [
            'label'     => 'Update Balance',
            'add'       => 'Add',
            'reduce'    => 'Reduce',
            'operation' => 'Operation',
            'amount'    => 'Amount',
            'note'      => 'Note',
        ],
        'edit'           => 'Edit',
    ],

    'notification' => [
        'update_balance_success' => 'Update Balance Success',
        'edit_success'           => 'Edit Success',
    ],

    'step' => [
        'google2fa' => 'Google2fa',
    ],
    'fail' => [
        'location_not_match'    => 'The location does not match.',
        'google2fa_not_correct' => 'The google2fa is not correct.',
        'status'                => 'Status',
    ]
];
