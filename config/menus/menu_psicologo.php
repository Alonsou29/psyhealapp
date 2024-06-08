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
        'icon' => 'far fa-fw fa-file',
        'label_color' => 'success',
    ],
    [
        'text' => 'Pacientes',
        'url' => 'admin/pages',
        'icon' => 'far fa-fw fa-file',
        'label' => 4,
        'label_color' => 'success',
        'submenu' => [
            [
                'text' => 'Tabla Pacientes',
                'url' => '/tablaPa',
            ],
        ],
    ],
    [
        'text' => 'Recursos',
        'url' => '/recursosPs',
        'icon' => 'far fa-fw fa-file',
        'label_color' => 'success',
    ],
    ['header' => 'FOROS'],
    [
        'text' => 'Lista de Categorías',
        'url' => 'Ps/listaCategorias',
        'icon' => 'far fa-fw fa-file',
        'label_color' => 'success',
    ],
    [
        'text' => 'Crear Categoría',
        'url' => 'Ps/crearCategoria',
        'icon' => 'far fa-fw fa-file',
        'label_color' => 'success',
    ],
    ['header' => 'account_settings'],
    [
        'text' => 'profile',
        'url' => '/perfilPs',
        'icon' => 'fas fa-fw fa-user',
    ],
    [
        'text' => 'change_password',
        'url' => '/cambiarContraseñaPs',
        'icon' => 'fas fa-fw fa-lock',
    ],
    [
        'text' => 'Cerrar Sesion',
        'url' => 'logout',
        'icon' => 'fas fa-fw fa-lock',
    ],
];
