<?php

return [
    [
        'type' => 'navbar-search',
        'text' => 'search',
        'topnav_right' => true,
    ],
    [
        'type' => 'fullscreen-widget',
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
        'url' => '/misCitasPs',
        'icon' => 'far fa-calendar-check',
        'label_color' => 'success',
    ],
    [
        'text' => 'Recursos',
        'url' => '/recursosPs',
        'icon' => 'fas fa-book-open',
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
];
