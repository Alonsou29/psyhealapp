<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


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
    Route::post('registerPs','App\Http\Controllers\loginPaciente@registroPsicologo')->name('registrops');
// });

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

//Paneles 
Route::group(['middleware' => ['auth', \App\Http\Middleware\CargarMenuRol::class]], function () {
    Route::get('/panelPs', function () {
        return view('panelPs.index');
    })->name('panelPs');

    // Rutas panel psicologos
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

    //rutas panel paciente
     // Rutas panel psicologos
     Route::get('/psicologo', function () {
        return view('panelPa.inicio.tabla_psicologo');
    })->name('psicologo');
    
    Route::get('/psicologo/ver', function () {
        return view('panelPa.inicio.ver_psicologo');
    })->name('verPsicologo');
    
    Route::get('/recursosPa', function () {
        return view('panelPa.inicio.recursosPa');
    })->name('recursosPa');
    
    Route::get('Pa/listaForos', function () {
        return view('panelPa.foros.listaForosPa');
    })->name('listaForosPs');
    
    Route::get('Pa/verForos', function () {
        return view('panelPa.foros.verForosPa');
    })->name('verForosPa');
    
    
    Route::get('/perfilPa', function () {
        return view('panelPa.ajustesCuentasPa.perfilPa');
    })->name('perfilPa');
    
    Route::get('/cambiarContraseñaPa', function () {
        return view('panelPa.ajustesCuentasPa.cambiarContraseñaPa');
    })->name('cambiarContraseñaPa');
});

// Route::get('/panelPs', function () {
//     return view('panelPs.index');
// })->name('panelPs');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
