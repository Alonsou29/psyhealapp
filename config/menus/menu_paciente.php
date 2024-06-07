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
        'url' => '/panelPaciente',
        'icon' => 'far fa-fw fa-file',
        'label_color' => 'success',
    ],
    [
        'text' => 'Psicologo',
        'url' => '/psicologo',
        'icon' => 'far fa-fw fa-file',
        'label_color' => 'success',
    ],
    [
        'text' => 'Recursos',
        'url' => '/recursosPa',
        'icon' => 'far fa-fw fa-file',
        'label_color' => 'success',
    ],
    ['header' => 'FOROS'],
    [
        'text' => 'Lista de Foros',
        'url' => 'Pa/listaForos',
        'icon' => 'far fa-fw fa-file',
        'label_color' => 'success',
    ],
    ['header' => 'JUEGOS'],
    [
        'text' => 'Lista de Juegos',
        'url' => 'admin/pages',
        'icon' => 'far fa-fw fa-file',
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
    ['header' => 'account_settings'],
    [
        'text' => 'profile',
        'url' => '/perfilPa',
        'icon' => 'fas fa-fw fa-user',
    ],
    [
        'text' => 'change_password',
        'url' => '/cambiarContraseñaPa',
        'icon' => 'fas fa-fw fa-lock',
    ],
    [
        'text' => 'Cerrar Sesion',
        'url' => 'logout',
        'icon' => 'fas fa-fw fa-lock',
    ],
];
