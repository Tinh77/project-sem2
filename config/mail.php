<?php

return [
    'driver' => env('MAIL_DRIVER', 'mailgun'),
    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
    'port' => env('MAIL_PORT', 587),
    'from' => ['address' => 'xuanhung2401@gmail.com', 'name' => 'Xuan Hung'],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => env('MAIL_USERNAME','postmaster@sandbox28b367b3f8c24ce78c4f94332bcd4ced.mailgun.org'),
    'password' => env('MAIL_PASSWORD','7393c62f0866784ff5b92e2ef3ee4fa4-f45b080f-380a83a6'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
];
