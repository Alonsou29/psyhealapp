<?php

namespace App\Http\Controllers\Psicologo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comentario;
//use Session;

class ComentariosController extends Controller
{
    public function index(){
        $comentarios = Comentario::all();
        return view('PanelPs.comentarios.index', compact("comentarios"));
    }

    // public function create(){
    //     return view('PanelPs.categorias.create');
    // }

    // public function store(Request $request){
    //     $categoria = new Categoria($request->all());
    //     $categoria->save();
    //     return redirect('Ps/categorias');
    // }

    public function edit($id){
        $comentario = Comentario::find($id);
        return view('PanelPs.comentarios.edit', compact("comentario"));
    }


    public function update(Request $request, $id){
        $comentario = Comentario::find($id);
        
        if($request->estado)
            $comentario->estado = 1;
        else
            $comentario->estado = 0;
        $comentario->save();
        return redirect('Ps/comentarios');
    }

    public function destroy($id){
        $comentario = Comentario::find($id);
        $comentario->delete();
        return redirect('Ps/comentarios');
    }
}
