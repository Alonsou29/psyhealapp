@extends('adminlte::page')
@vite('resources/css/app.css')



@section('content_header')
    <h1>    Perfil</h1>
@stop

@section('content')
<form action="#" method="POST">
    <div class="col-span-6 sm:col-span-4">
        <label for="current_password" class="block text-sm font-medium text-gray-700">{{ __('Contraseña actual') }}</label>
        <input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
        <!-- Aquí iría el mensaje de error si es necesario -->
    </div>

    <div class="col-span-6 sm:col-span-4">
        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Nueva Contraseña') }}</label>
        <input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        <!-- Aquí iría el mensaje de error si es necesario -->
    </div>

    <div class="col-span-6 sm:col-span-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Confirmar Contraseña') }}</label>
        <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        <!-- Aquí iría el mensaje de error si es necesario -->
    </div>

    <!-- Aquí iría el mensaje de éxito si es necesario -->

    <button type="submit" class="mt-6 bg-contenidocartas hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
        {{ __('Save') }}
    </button>
</form>

@stop
