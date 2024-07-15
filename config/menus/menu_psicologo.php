<?php

return [
    [
        // 'type' => 'navbar-search',
        'text' => 'search',
        'topnav_right' => true,
    ],
    [
        'type' => '',
        'topnav_right' => true,
    ],
    [
        'type' => 'sidebar-menu-search',
        'text' => 'search',
    ],
    [
        'text' => 'blog',
        'url' => 'admin/blog',
        'can' => 'manage-blog',
    ],
    ['header' => 'INICIO'],
    [
        'text' => 'Pagina Principal',
        'url' => '/panelPs',
        'icon' => 'fas fa-home',
        'label_color' => 'success',
    ],
    [
        'text' => 'Pacientes',
        'url' => 'admin/pages',
        'icon' => 'fas fa-user',
        'label' => 1,
        'label_color' => 'success',
        'submenu' => [
            [
                'text' => 'Tabla Pacientes',
                'url' => '/tablaPa',
            ],
        ],
    ],
    [
        'text' => 'Mis Citas',
        'url' => '/Citas',
        'icon' => 'far fa-calendar-check',
        'label_color' => 'success',
        'submenu' => [
            [
                'text' => 'Mis Citas',
                'url' => '/Citas',
            ],
            [
                'text' => 'Crear Cita',
                'url' => '/CrearCita',
            ],
        ],
    ],
    [
        'text' => 'Recursos',
        'url' => '/recursosPs',
        'icon' => 'fas fa-book',
        'label_color' => 'success',
    ],
    ['header' => 'FOROS'],
    [
        'text' => 'Lista de Categorías',
        'url' => 'Ps/categorias',
        'icon' => 'fas fa-list-ul',
        'label_color' => 'success',
    ],
    [
        'text' => 'Crear Categoría',
        'url' => 'Ps/crearCategoria',
        'icon' => 'fas fa-plus-circle',
        'label_color' => 'success',
    ],
    ['header' => 'CHAT'],
    [
        'text' => 'Chat',
        'url' => '/chat',
        'icon' => 'fas fa-comments',
        'label_color' => 'success',
    ],
    // [
    //     'text' => 'Crear Contacto',
    //     'url' => '/contacts',
    //     'icon' => 'fas fa-plus-circle',
    //     'label_color' => 'success',
    // ],
    ['header' => 'account_settings'],
    [
        'text' => 'profile',
        'url' => '/perfilPs',
        'icon' => 'fas fa-user-circle',
    ],
    [
        'text' => 'change_password',
        'url' => '/cambiarContraseñaPs',
        'icon' => 'fas fa-key',
    ],
    [
        'text' => 'Cerrar Sesion',
        'url' => 'logout',
        'icon' => 'fas fa-sign-out-alt',
    ],
    // [
    //     'type' => 'navbar-notification',
    //     'id' => 'my-notification',                // An ID attribute (required).
    //     'icon' => 'fas fa-bell',                  // A font awesome icon (required).
    //     'icon_color' => 'warning',                // The initial icon color (optional).
    //     'label' => 0,                             // The initial label for the badge (optional).
    //     'label_color' => 'danger',                // The initial badge color (optional).
    //     'url' => 'notifications/show',            // The url to access all notifications/elements (required).
    //     'topnav_right' => true,                   // Or "topnav => true" to place on the left (required).
    //     'dropdown_mode' => true,                  // Enables the dropdown mode (optional).
    //     'dropdown_flabel' => 'All notifications', // The label for the dropdown footer link (optional).
    //     'update_cfg' => [
    //         'url' => 'notifications/get',         // The url to periodically fetch new data (optional).
    //         'period' => 30,                       // The update period for get new data (in seconds, optional).
    //     ],
    // ],
];
