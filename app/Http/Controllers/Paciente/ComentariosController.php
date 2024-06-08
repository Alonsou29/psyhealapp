<?php

namespace App\Http\Controllers\Paciente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Post;
class ComentariosController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    public function store(Request $request, Post $post){
        // dd($request);
        $comentario= new Comentario();
        $comentario->descripcion= $request->descripcion;
        $comentario->parent_id= $request->parent_id;
        $comentario->user_id= \auth()->id();
        $post->comentarios()->save($comentario);

        return redirect()->back();

    }
}
