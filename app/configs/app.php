<?php
$config['app'] = [
    'routeMiddleware' => [
        'admin/adminpanel' => [
            'middleware' => AuthMiddleware::class,
        ],
        'admin/users' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],

        /* User Middleware */
        'dashboard' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'employee'
        ]
    ],
    'globalMiddleware' => [

    ]
];

?>