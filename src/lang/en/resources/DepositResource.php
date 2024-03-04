<?php

return [
    'title' => 'Deposit',

    'widgets' => [
        'amount' => ':coin Amount',
        'fee'    => ':coin Fee',
    ],

    'table' => [
        'team_name'           => 'Team Name',
        'status'              => 'Status',
        'notify_status'       => 'Notify Status',
        'system_order_number' => 'System Order Number',
        'order_number'        => 'Order Number',
        'transaction_hash'    => 'Transaction Hash',
        'to_wallet_address'   => 'To Wallet Address',
        'submit_amount'       => 'Submit Amount',
        'amount'              => 'Amount',
        'confirmed_at'        => 'Confirmed At',
        'matched_at'          => 'Matched At',
        'created_at'          => 'Created At',
        'created_from'        => 'Created From',
        'created_to'          => 'Created To',
        'ip'                  => 'IP',
        'total_fee'           => 'Total Fee',
        'notified_at'         => 'Notified At',
        'merchant_number'     => 'Merchant Number',
        'info'                => 'Info',
    ],

    'manual_success_type' => [
        'label'       => 'Manual Success Type',
        'transaction' => 'Transaction Hash',
        'amount'      => 'Manual Success',
    ],

    'button' => [
        'manual_confirm' => 'Manual Confirm',
        'notify'         => 'Notify',
        'make_empty'     => 'Make Empty',
    ],

    'notification' => [
        'manual_confirm_success' => 'Manual Confirm Success',
        'success'                => 'Notify Success',
        'make_empty_success'     => 'Make Empty Success',
    ],

    'fail' => [
        'amount_and_transaction_hash_can_not_filled_at_the_same_time' => 'Amount and Transaction Hash can not filled at the same time',
    ],

    'helper_text' => [
        'transaction_hash' => 'If you have transaction hash, please fill in the transaction hash and leave the amount blank.',
        'amount'           => 'If you do not have transaction hash, please fill in the amount and leave the transaction hash blank.',
    ],
];
