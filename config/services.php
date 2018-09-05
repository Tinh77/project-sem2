<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN', 'sandbox28b367b3f8c24ce78c4f94332bcd4ced.mailgun.org'),
        'secret' => env('MAILGUN_SECRET', 'e902de2e46c715fcf74cd52410c0dbb9-f45b080f-0e0ac3c3'),
    ]

];
