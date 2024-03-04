<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute 必须接受。',
    'accepted_if'          => '当 :other 是 :value 时，:attribute 必须接受。',
    'active_url'           => ':attribute 必须是一个有效的 URL。',
    'after'                => ':attribute 必须是 :date 之后的日期。',
    'after_or_equal'       => ':attribute 必须是等于或晚于 :date 的日期。',
    'alpha'                => ':attribute 只能包含字母。',
    'alpha_dash'           => ':attribute 只能包含字母、数字、短横线和下划线。',
    'alpha_num'            => ':attribute 只能包含字母和数字。',
    'array'                => ':attribute 必须是一个数组。',
    'ascii'                => ':attribute 只能包含单字节的字母数字字符和符号。',
    'before'               => ':attribute 必须是 :date 之前的日期。',
    'before_or_equal'      => ':attribute 必须是等于或早于 :date 的日期。',
    'between'              => [
        'array'   => ':attribute 的长度必须在 :min 和 :max 之间。',
        'file'    => ':attribute 的大小必须在 :min 到 :max kilobytes 之间。',
        'numeric' => ':attribute 必须在 :min 和 :max 之间。',
        'string'  => ':attribute 的长度必须在 :min 到 :max 之间。',
    ],
    'boolean'              => ':attribute 必须是 true 或 false。',
    'can'                  => ':attribute 包含未经授权的值。',
    'confirmed'            => ':attribute 确认不匹配。',
    'current_password'     => '密码不正确。',
    'date'                 => ':attribute 必须是一个有效的日期。',
    'date_equals'          => ':attribute 必须等于 :date。',
    'date_format'          => ':attribute 必须匹配格式 :format。',
    'decimal'              => ':attribute 必须有 :decimal 位小数。',
    'declined'             => ':attribute 必须被拒绝。',
    'declined_if'          => '当 :other 是 :value 时，:attribute 必须被拒绝。',
    'different'            => ':attribute 和 :other 必须不同。',
    'digits'               => ':attribute 必须是 :digits 位数字。',
    'digits_between'       => ':attribute 必须在 :min 和 :max 位数字之间。',
    'dimensions'           => ':attribute 的图像尺寸无效。',
    'distinct'             => ':attribute 字段具有重复的值。',
    'doesnt_end_with'      => ':attribute 不能以以下任何一个结尾： :values。',
    'doesnt_start_with'    => ':attribute 不能以以下任何一个开头： :values。',
    'email'                => ':attribute 必须是一个有效的电子邮件地址。',
    'ends_with'            => ':attribute 必须以以下任何一个结尾： :values。',
    'enum'                 => '选择的 :attribute 无效。',
    'exists'               => '所选的 :attribute 无效。',
    'file'                 => ':attribute 必须是一个文件。',
    'filled'               => ':attribute 字段必须有值。',
    'gt'                   => [
        'array'   => ':attribute 字段必须有多于 :value 个项目。',
        'file'    => ':attribute 的大小必须大于 :value kilobytes。',
        'numeric' => ':attribute 必须大于 :value。',
        'string'  => ':attribute 的长度必须大于 :value 个字符。',
    ],
    'gte'                  => [
        'array'   => ':attribute 字段必须有 :value 个项目或更多。',
        'file'    => ':attribute 的大小必须大于或等于 :value kilobytes。',
        'numeric' => ':attribute 必须大于或等于 :value。',
        'string'  => ':attribute 的长度必须大于或等于 :value 个字符。',
    ],
    'image'                => ':attribute 必须是一张图片。',
    'in'                   => '所选的 :attribute 无效。',
    'in_array'             => ':attribute 字段必须存在于 :other 中。',
    'integer'              => ':attribute 必须是一个整数。',
    'ip'                   => ':attribute 必须是一个有效的 IP 地址。',
    'ipv4'                 => ':attribute 必须是一个有效的 IPv4 地址。',
    'ipv6'                 => ':attribute 必须是一个有效的 IPv6 地址。',
    'json'                 => ':attribute 必须是一个有效的 JSON 字符串。',
    'lowercase'            => ':attribute 必须是小写。',
    'lt'                   => [
        'array'   => ':attribute 字段必须有少于 :value 个项目。',
        'file'    => ':attribute 的大小必须小于 :value kilobytes。',
        'numeric' => ':attribute 必须小于 :value。',
        'string'  => ':attribute 的长度必须小于 :value 个字符。',
    ],
    'lte'                  => [
        'array'   => ':attribute 字段不能有多于 :value 个项目。',
        'file'    => ':attribute 的大小必须小于或等于 :value kilobytes。',
        'numeric' => ':attribute 必须小于或等于 :value。',
        'string'  => ':attribute 的长度必须小于或等于 :value 个字符。',
    ],
    'mac_address'          => ':attribute 必须是一个有效的 MAC 地址。',
    'max'                  => [
        'array'   => ':attribute 字段不能有多于 :max 个项目。',
        'file'    => ':attribute 的大小不能大于 :max kilobytes。',
        'numeric' => ':attribute 不能大于 :max。',
        'string'  => ':attribute 的长度不能大于 :max 个字符。',
    ],
    'max_digits'           => ':attribute 字段不能有多于 :max 位数字。',
    'mimes'                => ':attribute 必须是以下类型的文件： :values。',
    'mimetypes'            => ':attribute 必须是以下类型的文件： :values。',
    'min'                  => [
        'array'   => ':attribute 字段必须至少有 :min 个项目。',
        'file'    => ':attribute 文件大小必须至少为 :min kilobytes。',
        'numeric' => ':attribute 必须至少为 :min。',
        'string'  => ':attribute 字符串长度必须至少为 :min 个字符。',
    ],
    'min_digits'           => ':attribute 字段必须至少有 :min 位数字。',
    'missing'              => ':attribute 字段必须缺失。',
    'missing_if'           => '当 :other 是 :value 时，:attribute 必须缺失。',
    'missing_unless'       => '除非 :other 是 :value，否则 :attribute 必须缺失。',
    'missing_with'         => '当 :values 存在时，:attribute 必须缺失。',
    'missing_with_all'     => '当 :values 存在时，:attribute 必须缺失。',
    'multiple_of'          => ':attribute 必须是 :value 的倍数。',
    'not_in'               => '所选的 :attribute 无效。',
    'not_regex'            => ':attribute 字段格式无效。',
    'numeric'              => ':attribute 必须是一个数字。',
    'password'             => [
        'letters'       => ':attribute 必须包含至少一个字母。',
        'mixed'         => ':attribute 必须包含至少一个大写字母和一个小写字母。',
        'numbers'       => ':attribute 必须包含至少一个数字。',
        'symbols'       => ':attribute 必须包含至少一个符号。',
        'uncompromised' => '给定的 :attribute 已经出现在数据泄露中。请选择一个不同的 :attribute。',
    ],
    'present'              => ':attribute 字段必须存在。',
    'prohibited'           => ':attribute 字段是禁止的。',
    'prohibited_if'        => '当 :other 是 :value 时，:attribute 字段是禁止的。',
    'prohibited_unless'    => '除非 :other 在 :values 中，否则 :attribute 字段是禁止的。',
    'prohibits'            => ':attribute 字段禁止 :other 出现。',
    'regex'                => ':attribute 字段格式无效。',
    'required'             => ':attribute 字段是必需的。',
    'required_array_keys'  => ':attribute 字段必须包含以下条目： :values。',
    'required_if'          => '当 :other 是 :value 时，:attribute 字段是必需的。',
    'required_if_accepted' => '当 :other 被接受时，:attribute 字段是必需的。',
    'required_unless'      => '除非 :other 在 :values 中，否则 :attribute 字段是必需的。',
    'required_with'        => '当 :values 存在时，:attribute 字段是必需的。',
    'required_with_all'    => '当 :values 存在时，:attribute 字段是必需的。',
    'required_without'     => '当 :values 不存在时，:attribute 字段是必需的。',
    'required_without_all' => '当 :values 中没有一个存在时，:attribute 字段是必需的。',
    'same'                 => ':attribute 字段必须匹配 :other。',
    'size'                 => [
        'array'   => ':attribute 字段必须包含 :size 个项目。',
        'file'    => ':attribute 文件大小必须为 :size kilobytes。',
        'numeric' => ':attribute 必须为 :size。',
        'string'  => ':attribute 字符串长度必须为 :size 个字符。',
    ],
    'starts_with'          => ':attribute 字段必须以以下任何一个开头： :values。',
    'string'               => ':attribute 字段必须是字符串。',
    'timezone'             => ':attribute 字段必须是一个有效的时区。',
    'unique'               => ':attribute 已经被使用。',
    'uploaded'             => ':attribute 上传失败。',
    'uppercase'            => ':attribute 字段必须是大写。',
    'url'                  => ':attribute 字段必须是一个有效的 URL。',
    'ulid'                 => ':attribute 必须是一个有效的 ULID。',
    'uuid'                 => ':attribute 必须是一个有效的 UUID。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
