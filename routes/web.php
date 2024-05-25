<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal.welcome');
})->name('welcome');

Route::get('/preguntas', function () {
    return view('principal.preguntasF');
})->name('preguntasF');

Route::get('/psicologos', function () {
    return view('principal.psicologos');
})->name('psicologos');

Route::get('/registerPs', function () {
    return view('auth.registerPs');
})->name('registerPs');

Route::get('/panelPs', function () {
    return view('panelPs.index');
})->name('panelPs');

Route::get('/tablaPa', function () {
    return view('panelPs.inicio.tabla_pacientes');
})->name('tabla_pacientes');

Route::get('/recursosPs', function () {
    return view('panelPs.inicio.recursosPs');
})->name('recursosPs');

Route::get('Ps/listaForos', function () {
    return view('panelPs.foros.listaForosPs');
})->name('listaForosPs');

Route::get('Ps/crearForos', function () {
    return view('panelPs.foros.crearForosPs');
})->name('crearForosPs');

Route::get('/perfilPs', function () {
    return view('panelPs.ajustesCuentaPs.perfilPs');
})->name('perfilPs');

Route::get('/cambiarContraseñaPs', function () {
    return view('panelPs.ajustesCuentaPs.cambiarContraseñaPs');
})->name('cambiarContraseñaPs');

Route::post('/', 'App\Http\Controllers\loginPaciente@registroPsicologo')->name('registrops');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
