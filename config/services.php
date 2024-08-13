<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook'=>[
        'client_id'=>'3305013369719743',
        'client_secret'=>'78381073342f13f3da8b249ac8671e7f',
        'redirect'=>'http://localhost:8000/callback/facebook',
    ],
    'google' => [
        'client_id' => '616831862-7qqb6jub4crkrqhe7b9n7q2bfef4th66.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
      ],

];
