<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Post;
use App\Models\Comentario;
class FrontController extends Controller
{
    public function index(Request $request){
        $categorias=Categoria::all();
        return view('categorias.index', compact("categorias"));
    }

    public function categoria($categoria){
        $categoria=Categoria::find($categoria);
        return view('categorias.post', compact("categoria"));
    }

    public function post($categoria, $post){
        $post = Post::find($post);
        return view('categorias.foro', compact("post"));
    }


}
