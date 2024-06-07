<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Controllers\Psicologo\CategoriasController;


// principal

Route::get('/', function () {
    return view('principal.welcome');
})->name('welcome');

//lista de categorias
Route::get('/categorias',[App\Http\Controllers\FrontController::class, 'index']);
//lista de post de una categoria
Route::get('/categorias/{categoria}',[App\Http\Controllers\FrontController::class, 'categoria']);
//lista de comentarios de un post
Route::get('/categorias/{categoria}/{post}',[App\Http\Controllers\FrontController::class, 'post']);

// Route::get('/categorias/{categoria}/{post}',[App\Http\Controllers\FrontController::class, 'store']);

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


Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::post('registerPs','App\Http\Controllers\loginPaciente@registroPsicologo')->name('registrops');

//Paneles 

Route::group(['middleware' => ['auth', \App\Http\Middleware\CargarMenuRol::class]], function () {
    Route::get('/panelPs', function () {
        return view('panelPs.index');
    })->name('panelPs');
    
    // Rutas panel psicologos
    Route::prefix('Ps')->group(function () {
        Route::resource('categorias', App\Http\Controllers\Psicologo\CategoriasController::class);
        Route::resource('posts', App\Http\Controllers\Psicologo\PostsController::class);
        Route::resource('comentarios', App\Http\Controllers\Psicologo\ComentariosController::class);
    });

    // Route::group(['prefix'=>'paciente', 'middleware' =>['role:paciente']],function(){
    //     //
    //     Route::post('{post}/comentario',[App\Http\Controllers\Paciente\ComentariosController::class, 'store'])->name('store');
    // });

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
