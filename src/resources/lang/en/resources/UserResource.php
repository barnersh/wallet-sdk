<?php

return [
    'table'  => [
        'username'         => 'Username',
        'name'             => 'Name',
        'role'             => 'Role',
        'deleted_at'       => 'Deleted At',
        'last_login_at'    => 'Last Login At',
        'whitelisted_ipv4' => 'Whitelisted IPv4',
    ],
    'form'   => [
        'username'        => 'Username',
        'name'            => 'Name',
        'password'        => 'Password',
        'role'            => 'Role',
        'whitelisted_ips' => 'Whitelisted IPs',
        'ipv4'            => 'IPv4',
        'country_code'    => 'Country Code',
    ],
    'action' => [
        'reset_password'   => 'Reset Password',
        'reset_secret_key' => 'Reset Secret Key',
        'reset_google2fa'  => 'Reset Google2fa',
    ],
    'step'   => [
        'google2fa' => 'Google2fa',
    ],
    'fail'   => [
        'location_not_match'    => 'The location does not match.',
        'google2fa_not_correct' => 'The google2fa is not correct.',
    ]
];
