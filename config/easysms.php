<?php

return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 10.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'qcloud','aliyun',
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'qcloud' => [
            'sdk_app_id' => env('SMS_QCLOUD_ACCESS_KEY_ID'), // SDK APP ID
            'app_key' => env('SMS_QCLOUD_ACCESS_KEY_SECRET'), // APP KEY
            'sign_name' => '', // 短信签名，如果使用默认签名，该字段可缺省（对应官方文档中的sign）
        ],
        'aliyun' => [
            'access_key_id' => env('SMS_ALIYUN_ACCESS_KEY_ID'),
            'access_key_secret' => env('SMS_ALIYUN_ACCESS_KEY_SECRET'),
            'sign_name' => '许钊纹',
            'templates' => [
                'register' => env('SMS_ALIYUN_TEMPLATE_REGISTER'),
            ]
        ],
    ],
];