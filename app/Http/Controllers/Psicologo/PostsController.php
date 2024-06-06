<?php

namespace App\Http\Controllers\Psicologo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Categoria;
use App\Models\Post;
use Session;
use Intervention\Image\ImageManager as Image;
use Intervention\Image\Drivers\Gd\Driver;


class PostsController extends Controller
{
    public function index(){
        if(Session::get("categoria_id")!=null){
            $posts = Post::whereCategoria_id(Session::get("categoria_id"))->get();
            return view('PanelPs.foros.index', compact("posts"));
        }
        return redirect('/');
    }

    public function create(){
        return view('PanelPs.foros.create');
    }

    public function store(Request $request){
        $post = new Post($request->all());
        if($request->imagen != null ){
            $post["imagen"] = $namefile=time().".".$request["imagen"]->extension();
            $rutaimagen = public_path("img/foros");
            $request->imagen->move( $rutaimagen, $namefile);
        }
        $post->categoria_id = Session::get("categoria_id");
        $post->save();
        return redirect('Ps/posts');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('PanelPs.foros.edit', compact("post"));
    }

    // public function show($id){
    //     Session::put("categoria_id", $id);
    //     return redirect('panelPs/posts');
    // }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $imagenEliminar = $post->imagen;
        if($request->imagen != null ){
            $rutaAnterior = public_path("img/foros".$imagenEliminar);
            dd($request->imagen->dimensions());
            if(file_exists($rutaAnterior) && $imagenEliminar!=null){unlink(realpath($rutaAnterior));}
            $post["imagen"] = $namefile=time().".".$request["imagen"]->extension();
            $rutaimagen = public_path("img/foros");
            $request->imagen->move( $rutaimagen, $namefile);
        }
        $post->nombre=$request->get('nombre');
        $post->descripcion=$request->get('descripcion');
        $post->save();
        return redirect('Ps/posts');
    }

    public function destroy($id){
        $post = Post::find($id);
        $rutaAnterior = public_path("img/foros".$post->imagen);
        if(file_exists($rutaAnterior) && $post->imagen!=null){unlink(realpath($rutaAnterior));}
        $post->delete();
        return redirect('Ps/posts');
    }
}
