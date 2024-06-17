@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')

    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        @livewire('profile.update-password-form')

        <x-section-border />
    @endif

@stop
