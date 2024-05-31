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
    ['header' => 'INICIO'],
    [
        'text' => 'Mi perfil',
        'url' => '/paciente/perfil',
        'icon' => 'far fa-fw fa-user',
        'label_color' => 'success',
    ],
    [
        'text' => 'Mis citas',
        'url' => '/paciente/citas',
        'icon' => 'far fa-fw fa-calendar',
        'label_color' => 'success',
    ],
    [
        'text' => 'Cerrar Sesion',
        'url' => 'logout',
        'icon' => 'fas fa-fw fa-lock',
    ],
];
