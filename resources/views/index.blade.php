@extends('adminlte::page')
@vite('resources/css/app.css')

@section('sidebar')
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @foreach(config('adminlte.menu_psicologo', []) as $item)
            @if(isset($item['header']))
                <li class="nav-header">{{ $item['header'] }}</li>
            @elseif(isset($item['submenu']))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon {{ $item['icon'] ?? 'far fa-circle' }}"></i>
                        <p>
                            {{ $item['text'] }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach($item['submenu'] as $subitem)
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ $subitem['text'] }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon {{ $item['icon'] ?? 'far fa-circle' }}"></i>
                        <p></p>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
@stop



@section('content_header')
    <h1>Bienvenido a psyheal.</h1>
@stop


