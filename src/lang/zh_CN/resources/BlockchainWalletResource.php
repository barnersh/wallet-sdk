<?php

return [
    'title' => '系统钱包',

    'widgets' => [
        'balance' => ':coin 余额',
    ],

    'table' => [
        'address'            => '钱包地址',
        'type'               => '类型',
        'blockchain_balance' => '链上余额',
        'fuel_balance'       => '燃料余额',
        'status'             => '状态',
        'created_at'         => '创建时间',
        'balance'            => ':coin 余额',
    ],

    'form' => [
        'chain'           => '链别',
        'type'            => '类型',
        'amount'          => '数量',
        'info'            => '信息',
        'from_address'    => '转出地址',
        'usdt_balance'    => 'USDT 余额',
        'trx_balance'     => 'TRX 余额',
        'coin'            => '币种',
        'to_address'      => '目标地址',
        'transfer_amount' => '转帐金额',
        'google2fa'       => '谷哥验证码',
    ],

    'button' => [
        'delete'                    => '删除',
        'active-collection'         => '一键归集',
        'active-collection Success' => '启动成功',
        'transfer'                  => '系统钱包转账',
    ],

    'notification' => [
        'transfer_success' => '转账成功',
    ],
];
