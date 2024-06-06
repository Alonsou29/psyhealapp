<?php

namespace App\Http\Controllers\Psicologo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Session;

/**
 * Class CategoriaController
 * @package App\Http\Controllers
 */
class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('PanelPs.categorias.index', compact("categorias"));
    }

    public function create(){
        return view('PanelPs.categorias.create');
    }

    public function store(Request $request){
        $categoria = new Categoria($request->all());
        $categoria->save();
        return redirect('Ps/categorias');
    }

    public function edit($id){
        $categoria = Categoria::find($id);
        return view('PanelPs.categorias.edit', compact("categoria"));
    }

    public function show($id){
        Session::put("categoria_id", $id);
        return redirect('Ps/posts');
    }

    public function update(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->save();
        return redirect('Ps/categorias');
    }

    public function destroy($id){
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('Ps/categorias');
    }


}
