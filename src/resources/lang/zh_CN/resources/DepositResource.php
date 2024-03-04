<?php

return [
    'title' => '充值',

    'widgets' => [
        'amount' => ':coin 实际支付金额',
        'fee'    => ':coin 手续费',
    ],

    'table' => [
        'team_name'           => '商户名称',
        'status'              => '订单状态',
        'notify_status'       => '回调状态',
        'system_order_number' => '系统订单号',
        'order_number'        => '商户订单号',
        'transaction_hash'    => '交易哈希',
        'to_wallet_address'   => '系统钱包地址',
        'amount'              => '实际支付金额',
        'submit_amount'       => '订单金额',
        'confirmed_at'        => '成功时间',
        'matched_at'          => '匹配时间',
        'created_at'          => '创建时间',
        'created_from'        => '创建时间 - 从',
        'created_to'          => '创建时间 - 至',
        'ip'                  => 'IP',
        'total_fee'           => '手续费',
        'notified_at'         => '回调时间',
        'merchant_number'     => '商户号',
        'info'                => '订单信息',
    ],

    'manual_success_type' => [
        'label'            => '手动成功类型',
        'transaction_hash' => '交易哈希',
        'amount'           => '直接成功'
    ],

    'button' => [
        'manual_confirm' => '成功',
        'notify'         => '补发回调',
        'make_empty'     => '补空单',
    ],

    'notification' => [
        'manual_confirm_success' => '手动确认成功',
        'success'                => '回调成功',
        'make_empty_success'     => '补空单成功',
    ],

    'fail' => [
        'amount_and_transaction_hash_can_not_filled_at_the_same_time' => '金额和交易哈希不能同时填写',
    ],

    'helper_text' => [
        'transaction_hash' => '有交易哈希的情况下，无论有无修改金额，直接填写交易哈希即可',
        'amount'           => '仅适用于「无交易哈希」且希望直接成功的情况，有交易哈希请填入交易哈希栏位并保持金额栏位为空值即可',
    ],
];
