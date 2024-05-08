<?php
$config['app'] = [
    'routeMiddleware' => [
        'signup' => AuthMiddleware::class
    ],
    'globalMiddleware' => [

    ]
];

?>