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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
