<?php

return [
    'title' => '提现',

    'widgets' => [
        'amount' => ':coin 金额',
        'fee'    => ':coin 手续费',
    ],

    'table' => [
        'team_name'           => '商户名称',
        'system_order_number' => '系统订单号',
        'order_number'        => '商户订单号',
        'type'                => '提现类型',
        'status'              => '订单状态',
        'transaction_status'  => '链上状态',
        'amount'              => '提现金额',
        'fee'                 => '手续费',
        'created_at'          => '创建时间',
        'matched_at'          => '匹配时间',
        'confirmed_at'        => '成功时间',
        'notify_status'       => '回调状态',
        'notify_at'           => '回调时间',
        'created_from'        => '创建时间 - 从',
        'created_to'          => '创建时间 - 至',
        'ip'                  => 'IP',
        'from_wallet_address' => '系统钱包地址',
        'to_wallet_address'   => '商户钱包地址',
        'transaction_hash'    => '交易哈希',
    ],

    'button' => [
        'withdraw_audit'        => '审核',
        'withdraw_audit_submit' => '确认转帐',
        'notify'                => '补发回调',
        'withdraw'              => '建立下发',
        'rollback'              => '回滚',
        'resend'                => '重送',
        'manual_success'        => '手动成功',
    ],

    'notification' => [
        'withdraw_audit_success'      => '提现审核成功',
        'blockchain_wallet_not_found' => '找不到钱包',
        'success'                     => '回调成功',
        'withdraw_success'            => '下发成功',
        'rollback_success'            => '回滚成功',
        'resend_success'              => '重送成功',
        'error_please_contact_admin'  => '发生错误，请联系管理员',
        'insufficient_balance'        => '余额不足',
    ],

    'view' => [
        'withdraw_audit' => [
            'title'                     => '提现',
            'team_name'                 => '商户名称',
            'merchant_number'           => '商户号',
            'channel'                   => '通道',
            'system_order_number'       => '系统订单号',
            'order_number'              => '商户订单号',
            'to_wallet_address'         => '商户钱包地址',
            'blockchain_wallet_address' => '系统钱包地址',
            'usdt_balance'              => '系统钱包余额',
            'trx_balance'               => '系统钱包燃料余额',
            'amount'                    => '订单金额',
            'type'                      => '提现类型',
        ],
    ],

    'form' => [
        'withdraw' => [
            'usdt_balance'       => 'USDT 余额',
            'usdt_amount'        => '金额(USDT)',
            'withdraw_fixed_fee' => '手续费',
            'total_amount'       => '总扣款金额',
            'address'            => '钱包地址',
        ],
    ],

    'fail' => [
        'insufficient_balance' => '余额不足',
        'invalid_amount'       => '金额格式错误或超过位数限制',
        'invalid_address'      => '钱包地址格式错误',
    ],
];
