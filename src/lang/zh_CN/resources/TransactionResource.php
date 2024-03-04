<?php

return [
    'title' => '系统交易',

    'widgets' => [
        'amount' => ':coin 金额',
    ],

    'table' => [
        'chain'               => '链',
        'transaction_hash'    => '交易哈希',
        'from_wallet_address' => '转出地址',
        'to_wallet_address'   => '转入地址',
        'amount'              => '订单金额',
        'status'              => '链上状态',
        'block_created_at'    => '上链时间',
        'search_online'       => '链上搜寻',
        'transfer_type'       => '交易类型',
        'block_created_from'  => '上链时间 - 从',
        'block_created_to'    => '上链时间 - 至',
    ],

    'fail' => [
        'invalid_hash' => '无效的交易哈希',
        'not_found'    => '交易不存在',
    ],
];
