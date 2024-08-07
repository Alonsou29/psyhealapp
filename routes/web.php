<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\loginPaciente;
use App\Livewire\ChatComponent;
use App\Http\Controllers\CitasController;





// routes/web.php

use App\Http\Controllers\TestDassController;
use App\Http\Controllers\ResultadosController;

// Route::get('/resultados', [ResultadosController::class, 'show'])->name('resultados');
// Route::post('/guardar-resultados', [ResultadosController::class, 'store'])->name('guardar-resultados');


Route::get('/test-dass', [TestDassController::class, 'index'])->name('test-dass');
Route::post('/guardar-resultados', [ResultadosController::class, 'store'])->name('guardar-resultados');
Route::get('/resultados', [ResultadosController::class, 'show'])->name('resultados');
Route::resource('Citas', CitasController::class);


// principal
Route::get('/', function () {
    return view('principal.welcome');
})->name('welcome');



// Route::get('/categorias/{categoria}/{post}',[App\Http\Controllers\FrontController::class, 'store']);

Route::get('/preguntas', function () {
    return view('principal.preguntasF');
})->name('preguntasF');

Route::get('/psicologos', function () {
    return view('principal.psicologos');
})->name('psicologos');

Route::get('/AgendarCita', function () {
    return view('principal.escogerCita');
})->name('AgendarCita');

Route::middleware(\App\Http\Middleware\Redireccion::class)->group(function () {
    Route::get('/registerPs', function () {
        return view('auth.registerPs');
    })->name('registerPs');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
});

Route::get('logout', function () {
    auth()->logout();
    session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::post('registerPs', [loginPaciente::class, 'registroPsicologo'])->name('registrops');
Route::post('{post}/comentario', [App\Http\Controllers\Paciente\ComentariosController::class,'store'])->name('store');
//rutas del chat
Route::resource('contacts', App\Http\Controllers\ModChat\ContactController::class)->except(['show']);
Route::middleware('auth')->get('/chat', ChatComponent::class)->name('chat.index');

// Paneles
Route::group(['middleware' => ['auth', \App\Http\Middleware\CargarMenuRol::class]], function () {
    Route::get('/panel', function () {
        return view('index');
    })->name('panel');

    // Panel psicólogos
    Route::group(['middleware' => [\App\Http\Middleware\chequearRol::class . ':psicologo']], function () {
        Route::get('/panelPs', function () {
            return view('panelPs.index');
        })->name('panelPs');

        Route::prefix('Ps')->group(function () {
            Route::resource('categorias', App\Http\Controllers\Psicologo\CategoriasController::class);
            Route::resource('posts', App\Http\Controllers\Psicologo\PostsController::class);
            Route::resource('comentarios', App\Http\Controllers\Psicologo\ComentariosController::class);
        });

        Route::get('/tablaPa', function () {
            return view('panelPs.inicio.tabla_pacientes');
        })->name('tabla_pacientes');
        
        Route::get('/ver-paciente/{id}', function ($id) {
            // Aquí puedes colocar la lógica para obtener los datos del paciente según el $id
            $paciente = App\Models\Paciente::findOrFail($id);
            $userPaciente = App\Models\User::findOrFail($paciente->id_user);
            $diagnostico = App\Models\psicologo_paciente::where('paciente_id', $paciente->id)->first()->diagnostico;
        
            // Obtener los resultados del test DASS-21 del paciente
            $dassResult = App\Models\DassResult::where('user_id', $userPaciente->id)->first();
        
            return view('panelPs.inicio.ver_pacientes', compact('userPaciente', 'paciente', 'diagnostico', 'dassResult'));
        })->name('verPacientes');

        Route::resource('Citas', App\Http\Controllers\CitasController::class);

        Route::get('/CrearCita', function () {
            return view('panelPs.inicio.crearCita');
        })->name('CrearCita');

        Route::get('/recursosPs', function () {
            return view('panelPs.inicio.recursosPs');
        })->name('recursosPs');

        Route::get('Ps/Categorias', function () {
            return view('panelPs.categorias.index');
        })->name('listaForosPs');

        Route::get('Ps/crearCategoria', function () {
            return view('panelPs.categorias.create');
        })->name('crearForosPs');

        Route::get('Ps/editarCategorias', function () {
            return view('panelPs.categorias.edit');
        })->name('editarForos');

        Route::get('/perfilPs', function () {
            return view('panelPs.ajustesCuentaPs.perfilPs');
        })->name('perfilPs');

        Route::get('/editar-perfilPs', function () {
            return view('panelPs.ajustesCuentaPs.EditarperfilPs');
        })->name('EditarperfilPs');

        Route::resource('contacts', App\Http\Controllers\ModChat\ContactController::class)->except(['show']);


        Route::get('/cambiarContraseñaPs', function () {
            return view('panelPs.ajustesCuentaPs.cambiarContraseñaPs');
        })->name('cambiarContraseñaPs');
    });

    // Panel pacientes
    Route::group(['middleware' => [\App\Http\Middleware\chequearRol::class . ':paciente']], function () {
        Route::get('/panelPaciente', function () {
            return view('panelPa.index');
        })->name('panelPaciente');


        Route::get('/catalogo_psicologos', function () {
            return view('principal.catalogo_psicologos');
        })->name('catalogo_psicologos');

        Route::get('/psicologo/ver', function () {
            return view('panelPa.inicio.ver_psicologo');
        })->name('verPsicologo');

        // Route::get('/misCitasPa', function () {
        //     return view('panelPa.inicio.index_misCitasPa');
        // })->name('misCitasPa');

        Route::resource('CitasPa', App\Http\Controllers\CitasPaController::class);

        Route::get('/recursosPa', function () {
            return view('panelPa.inicio.recursosPa');
        })->name('recursosPa');

        Route::get('juegos/ansiedad', function () {
            return view('panelPa.juegos.ansiedad');
        })->name('JuegosAnsiedad');

        Route::get('juegos/depresion', function () {
            return view('panelPa.juegos.depresion');
        })->name('JuegosDepresion');

        Route::get('juegos/estres', function () {
            return view('panelPa.juegos.estres');
        })->name('JuegosEstres');

        Route::get('Pa/listaForos', function () {
            return view('panelPa.foros.listaForosPa');
        })->name('listaForosPa');

        Route::get('Pa/verForos', function () {
            return view('panelPa.foros.verForosPa');
        })->name('verForosPa');

        Route::get('/perfilPa', function () {
            return view('panelPa.ajustesCuentasPa.perfilPa');
        })->name('perfilPa');

        Route::get('/EditarperfilPa', function () {
            return view('panelPa.ajustesCuentasPa.EditarperfilPa');
        })->name('Editarperfil');

        Route::get('/editar-perfil', function () {
            return view('panelPa.ajustesCuentasPa.EditarperfilPa');
        })->name('Editarperfil');


        Route::get('/cambiarContraseñaPa', function () {
            return view('panelPa.ajustesCuentasPa.cambiarContraseñaPa');
        })->name('cambiarContraseñaPa');

        // lista de categorias
        Route::get('/categorias', [FrontController::class, 'index']);
        // lista de post de una categoria
        Route::get('/categorias/{categoria}', [FrontController::class, 'categoria']);
        // lista de comentarios de un post
        Route::get('/categorias/{categoria}/{post}', [FrontController::class, 'post']);
    });
});

Route::resource('AsignarPsicologo', App\Http\Controllers\AsignarPsicologoController::class);

// Route::get('/panelPs', function () {
//     return view('panelPs.index');
// })->name('panelPs');

// Rutas por defecto de Jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

