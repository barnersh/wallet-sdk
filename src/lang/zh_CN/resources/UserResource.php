<?php

return [
    'table'  => [
        'username'         => '帐号',
        'name'             => '姓名',
        'role'             => '角色',
        'deleted_at'       => '删除时间',
        'last_login_at'    => '最近登录时间',
        'whitelisted_ipv4' => '白名单',
    ],
    'form'   => [
        'username'        => '帐号',
        'name'            => '姓名',
        'password'        => '密码',
        'role'            => '角色',
        'whitelisted_ips' => '白名单 IP',
        'ipv4'            => 'IPv4',
        'country_code'    => '国家代码',
    ],
    'action' => [
        'reset_password'   => '重置密码',
        'reset_secret_key' => '重置密钥',
        'reset_google2fa'  => '重置谷哥验证码',
        'show_google2fa'   => '查看谷哥验证码',
    ],
    'step'   => [
        'google2fa' => '谷哥验证码',
    ],
    'fail'   => [
        'location_not_match'    => '位置不匹配。',
        'google2fa_not_correct' => '谷哥验证码错误。',
    ]
];
