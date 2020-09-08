<?php 

    return [
        'credentials' => [
            'key'    => env('AWS_ACCESS_KEY_ID', 'AKIAIP6DC4E5TXM7DUVQ'),
            'secret' => env('AWS_SECRET_ACCESS_KEY', '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'),
        ],
        'region' => env('AWS_REGION', 'us-east-1'),
        'version' => 'latest',
        
        // You can override settings for specific services
        'Ses' => [
            'region' => 'us-east-1',
        ],
    ];


?>