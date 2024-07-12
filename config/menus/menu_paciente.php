<?php

return [
    [
        // 'type' => 'navbar-search',
        'text' => 'search, text-secondary',
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
        'url' => '/panelPaciente',
        'icon' => 'fas fa-home',
        'label_color' => 'success',
    ],
    [
        'text' => 'Catálogo',
        'url' => 'catalogo_psicologos',
        'icon' => 'fas fa-book-open',
        'label_color' => 'success',
    ],
    [
        'text' => 'Psicologo',
        'url' => '/psicologo/ver',
        'icon' => 'fas fa-user-md',
        'label_color' => 'success',
    ],
    [
        'text' => 'Mis Citas',
        'url' => '/CitasPa',
        'icon' => 'far fa-calendar-check',
        'label_color' => 'success',
    ],
    [
        'text' => 'Recursos',
        'url' => '/recursosPa',
        'icon' => 'fas fa-book',
        'label_color' => 'success',
    ],
    ['header' => 'FOROS'],
    [
        'text' => 'Lista de Categorias',
        'url' => '/categorias',
        'icon' => 'fas fa-list-ul',
        'label_color' => 'success',
    ],
    ['header' => 'CHAT'],
    [
        'text' => 'Chat',
        'url' => '/chat',
        'icon' => 'fas fa-comments',
        'label_color' => 'success',
    ],
    ['header' => 'JUEGOS'],
    [
        'text' => 'Lista de Juegos',
        'url' => 'admin/pages',
        'icon' => 'fas fa-gamepad',
        'label_color' => 'success',
        'submenu' => [
            [
                'text' => 'Ansiedad',
                'url' => 'juegos/ansiedad',
            ],
            [
                'text' => 'Depresión',
                'url' => 'juegos/depresion',
            ],
            [
                'text' => 'Estres',
                'url' => 'juegos/estres',
            ],
        ],
    ],
    ['header' => 'AJUSTES DE CUENTA'],
    [
        'text' => 'Perfil',
        'url' => '/perfilPa',
        'icon' => 'fas fa-user-circle',
    ],
    [
        'text' => 'Cambiar Contraseña',
        'url' => '/cambiarContraseñaPa',
        'icon' => 'fas fa-key',
    ],
    [
        'text' => 'Cerrar Sesión',
        'url' => 'logout',
        'icon' => 'fas fa-sign-out-alt',
    ],
    [
        'type' => 'navbar-notification',
        'id' => 'my-notification',                // An ID attribute (required).
        'icon' => 'fas fa-bell',                  // A font awesome icon (required).
        'icon_color' => 'warning',                // The initial icon color (optional).
        'label' => 0,                             // The initial label for the badge (optional).
        'label_color' => 'danger',                // The initial badge color (optional).
        'url' => 'notifications/show',            // The url to access all notifications/elements (required).
        'topnav_right' => true,                   // Or "topnav => true" to place on the left (required).
        'dropdown_mode' => true,                  // Enables the dropdown mode (optional).
        'dropdown_flabel' => 'All notifications', // The label for the dropdown footer link (optional).
        'update_cfg' => [
            'url' => 'notifications/get',         // The url to periodically fetch new data (optional).
            'period' => 30,                       // The update period for get new data (in seconds, optional).
        ],
    ],
];
