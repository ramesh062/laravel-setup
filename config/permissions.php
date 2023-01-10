<?php
$permissions = [
    'dashboard' => [
        'label' => "Dashboard",
        'access' => [
            'view' => ['admin.dashboard'],
            'add' => [],
            'edit' => [],
            'delete' => [],
        ],
    ],
    'role' => [
        'label' => "Role",
        'access' => [
            'view' => ['admin.roles.index'],
            'add' => ['admin.roles.store'],
            'edit' => ['admin.roles.update'],
            'delete' => ['admin.roles.destory'],
        ],
    ],
    'admin-user' => [
        'label' => "Admin User",
        'access' => [
            'view' => ['admin.admin-users.index'],
            'add' => ['admin.admin-users.store'],
            'edit' => ['admin.admin-users.update'],
            'delete' => ['admin.admin-users.destory'],
        ],
    ],
    'category' => [
        'label' => "Category",
        'access' => [
            'view' => ['admin.categories.index'],
            'add' => ['admin.categories.store'],
            'edit' => ['admin.categories.update'],
            'delete' => ['admin.categories.destory'],
        ],
    ]
];
return $permissions;
?>
