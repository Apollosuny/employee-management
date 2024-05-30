<?php
$config['app'] = [
    'routeMiddleware' => [
        'admin/adminpanel' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin',
        ],
        'admin/users' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/users/register' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/positions' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/positions/create' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/positions/edit' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/contract-types' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/contract-types/create' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/contract-types/edit' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/departments' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/departments/create' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/departments/edit' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/contracts' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/contracts/create' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],
        'admin/contracts/edit' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'admin'
        ],

        /* User Middleware */
        'dashboard' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'employee'
        ],
        'dashboard/contracts' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'employee'
        ],
        'dashboard/contracts/show' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'employee'
        ],
        'dashboard/profile' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'employee'
        ],
        'dashboard/attendanceChecking' => [
            'middleware' => AuthorizeMiddleware::class,
            'role' => 'employee'
        ],

        '' => [
            'middleware' => AuthMiddleware::class,
        ]
    ],
    'globalMiddleware' => [

    ]
];

?>