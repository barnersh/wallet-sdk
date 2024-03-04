<?php

return [
    'title'          => '代理',
    'merchant_title' => '代理资讯',

    'widgets' => [
        'Balance' => ':coin 余额',
    ],

    'actions' => [
        'Create Whitelisted Ip' => '新增白名单 IP',
    ],

    'table' => [
        'name'                               => '代理名称',
        'merchant_number'                    => '代理号',
        'host_username'                      => '登入帐号',
        'parent_name'                        => '上级代理名称',
        'usdt_balance'                       => 'USDT 余额',
        'status'                             => '状态',
        'deposit_display_fee'                => '充值费率',
        'withdraw_display_fee'               => '提现费率',
        'whitelisted_ip_operator'            => '类型',
        'whitelisted_ip_operator_user'       => '登入',
        'whitelisted_ip_operator_api'        => 'API',
        'created_at'                         => '创建时间',
        'whitelisted_ip_empty_state_heading' => '没有白名单 IP',
        'operator_name'                      => '名称',
    ],

    'form' => [
        'name'            => '代理名称',
        'merchant_number' => '代理号',
        'parent_id'       => '上级代理',
        'status'          => '状态',
    ],

    'exception' => [
        'merchant_number_already_exists' => '代理号已存在。',
    ],

    'infolist' => [
        'name'                   => '代理名称',
        'merchant_number'        => '代理号',
        'host_username'          => '登入帐号',
        'last_login_at'          => '最后登入时间',
        'last_login_ipv4'        => '最后登入IP',
        'parent_name'            => '上级代理名称',
        'usdt_balance'           => 'USDT 余额',
        'user_info'              => '使用者资讯',
        'function'               => '功能开关',
        'wallet'                 => '钱包相关',
        'status'                 => '状态',
        'withdraw_enable'        => '后台申请提现功能',
        'agency_withdraw_enable' => 'API 代付功能',
        'deposit_enable'         => '充值开关',
        'deposit_display_fee'    => '充值费率',
        'withdraw_display_fee'   => '提现费率',
        'wallet_history'         => '钱包变动记录',
        'update'                 => '编辑',
        'deposit_rate'           => '充值费率（%）',
        'deposit_fixed_fee'      => '充值费率（单笔）',
        'withdraw_fixed_fee'     => '提现费率（单笔）',
    ],

    'button' => [
        'wallet_history' => '钱包',
        'update_balance' => [
            'label'     => '更改余额',
            'add'       => '增加',
            'reduce'    => '减少',
            'operation' => '操作',
            'amount'    => '金额',
            'note'      => '备注',
        ],
    ],

    'notification' => [
        'update_balance_success' => '更改余额成功',
    ],

    'step' => [
        'google2fa' => '谷哥验证码',
    ],
    'fail' => [
        'location_not_match'    => '位置不匹配。',
        'google2fa_not_correct' => '谷哥验证码错误。',
        'status'                => '状态',
    ]
];
