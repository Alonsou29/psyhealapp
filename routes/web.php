<?php

use Illuminate\Support\Facades\Route;

// principal

Route::get('/', function () {
    return view('principal.welcome');
})->name('welcome');

Route::get('/preguntas', function () {
    return view('principal.preguntasF');
})->name('preguntasF');

Route::get('/psicologos', function () {
    return view('principal.psicologos');
})->name('psicologos');

//login psicologos
Route::get('/registerPs', function () {
    return view('auth.registerPs');
})->name('registerPs');

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function(){
//     Route::post('registerPs','App\Http\Controllers\loginPaciente@registroPsicologo')->name('registrops');
// });

Route::get('login', function (){
auth()->login();

return Redirect('/panelPs');
})->name('login');

//panel psicologos (colocar en su respectiva validacion)

Route::get('/panelPs', function () {
    return view('panelPs.index');
})->name('panelPs');

Route::get('/tablaPa', function () {
    return view('panelPs.inicio.tabla_pacientes');
})->name('tabla_pacientes');

Route::get('/tablaPa/verPa', function () {
    return view('panelPs.inicio.ver_pacientes');
})->name('verPacientes');

Route::get('/recursosPs', function () {
    return view('panelPs.inicio.recursosPs');
})->name('recursosPs');

Route::get('Ps/listaForos', function () {
    return view('panelPs.foros.listaForosPs');
})->name('listaForosPs');

Route::get('Ps/crearForos', function () {
    return view('panelPs.foros.crearForosPs');
})->name('crearForosPs');

Route::get('Ps/editarForos', function () {
    return view('panelPs.foros.editarForosPs');
})->name('editarForos');

Route::get('/perfilPs', function () {
    return view('panelPs.ajustesCuentaPs.perfilPs');
})->name('perfilPs');

Route::get('/cambiarContraseñaPs', function () {
    return view('panelPs.ajustesCuentaPs.cambiarContraseñaPs');
})->name('cambiarContraseñaPs');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
