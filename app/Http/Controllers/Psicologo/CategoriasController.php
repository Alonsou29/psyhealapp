<?php

namespace App\Http\Controllers\Psicologo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

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
        return redirect('PanelPs/categorias');
    }
    public function edit($id){
        $categoria = Categoria::find($id);
        return view('PanelPs.categorias.create', compact("categoria"));
    }

    public function update(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->fill($request->all());
        $categoria->save();
        return redirect('panelPs/categorias');
    }

    public function destroy($id){
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('panelPs/categorias');
    }

}
