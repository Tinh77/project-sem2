<?php

return [
    'driver' => env('MAIL_DRIVER', 'mailgun'),
    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
    'port' => env('MAIL_PORT', 587),
    'from' => ['address' => 'xuanhung2401@gmail.com', 'name' => 'Xuan Hung'],
    'encryption' => env('MAIL_ENCRYPTION', null),
    'username' => env('MAIL_USERNAME','postmaster@sandbox28b367b3f8c24ce78c4f94332bcd4ced.mailgun.org'),
    'password' => env('MAIL_PASSWORD','1234567'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
];
