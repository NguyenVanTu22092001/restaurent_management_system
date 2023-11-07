<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    // 'roles_structure' => [
    //     'superadministrator' => [
    //         'users' => 'c,r,u,d',
    //         'payments' => 'c,r,u,d',
    //         'profile' => 'r,u',
    //     ],
    //     'administrator' => [
    //         'users' => 'c,r,u,d',
    //         'profile' => 'r,u',
    //     ],
    //     'user' => [
    //         'profile' => 'r,u',
    //     ],
    //     'role_name' => [
    //         'module_1_name' => 'c,r,u,d',
    //     ],
    // ],

    // 'permissions_map' => [
    //     'c' => 'create',
    //     'r' => 'read',
    //     'u' => 'update',
    //     'd' => 'delete',
    // ],



    'roles_structure' => [
        'admin' => [
            'import_ingredient' => 'c,r,u,d',
            'manage_supplier' => 'c,r,u,d',
            'take_orders' => 'c,r,u,d',
            'confirm_reservation' => 'c,r,u,d',
            'order_food' => 'c,r,u,d',
            'search_food_info' => 'c,r,u,d',
            'book_table' => 'c,r,u,d',
        ],
        'warehouse_staff' => [
            'import_ingredient' => 'c,r,u,d',
            'manage_supplier' => 'c,r,u,d',
        ],
        'waiter' => [
            'take_orders' => 'c,r,u,d',
            'confirm_reservation' => 'c,r,u,d',
            'order_food' => 'c,r,u,d',
        ],
        'user' => [
            'search_food_info' => 'c,r,u,d',
            'book_table' => 'c,r,u,d',
        ],

    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ],

];
