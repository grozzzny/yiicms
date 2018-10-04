<?php

return [
    'class' => 'Swift_SmtpTransport',
    'host' => 'smtp.yandex.ru',//smtp.yandex.ru
    'username' => '',//noreply@my-site.ru
    'password' => '',
    'port' => '587', //587 || 465
    'encryption' => 'TLS', //tls || ssl
//    'streamOptions' => [
//        'ssl' => [
//            'allow_self_signed' => true,
//            'verify_peer' => false,
//            'verify_peer_name' => false,
//        ],
//    ],
];
