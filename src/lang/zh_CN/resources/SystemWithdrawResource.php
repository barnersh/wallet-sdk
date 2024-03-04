<?php

return [
    'title' => '系统提现',

    'widgets' => [
        'amount' => ':coin 金额',
    ],

    'table' => [
        'system_order_number' => '系统订单号',
        'transaction_hash'    => '交易哈希',
        'transaction_status'  => '链上状态',
        'from_wallet_address' => '转出钱包地址',
        'to_wallet_address'   => '转入钱包地址',
        'amount'              => '金额',
        'type'                => '类型',
        'status'              => '订单状态',
        'created_at'          => '创建时间',
        'matched_at'          => '匹配时间',
        'confirmed_at'        => '确认时间',
        'created_from'        => '创建时间 - 从',
        'created_to'          => '创建时间 - 至',
    ],

    'view' => [
        'copy_image'             => '复制图片',
        'withdraw_has_submitted' => '申请提现',
        'system_is_processing'   => '系统处理中',
        'withdraw_success'       => '提现成功',
        'chain'                  => '链别',
        'system_order_number'    => '订单号',
        'order_number'           => '商户订单号',
        'transaction_hash'       => '交易哈希',
    ],

    'action' => [
        'receipt' => '凭证',
        'close'   => '关闭',
    ],
];
