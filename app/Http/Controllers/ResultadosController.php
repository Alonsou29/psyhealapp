<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DassResult;

class ResultadosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'respuestas' => 'required|array',
            'respuestas.*' => 'required|integer|min:0|max:3',
        ]);

        $ansiedad = 2 * array_sum(array_intersect_key($request->respuestas, array_flip([2, 4, 7, 9, 15, 19, 20])));
        $depresion = 2 * array_sum(array_intersect_key($request->respuestas, array_flip([3, 5, 10, 13, 16, 17, 21])));
        $estres = 2 * array_sum(array_intersect_key($request->respuestas, array_flip([1, 6, 8, 11, 12, 14, 18])));

        DassResult::create([
            'user_id' => auth()->id(),
            'ansiedad' => $ansiedad,
            'depresion' => $depresion,
            'estres' => $estres,
        ]);

        return redirect()->route('resultados');
    }

    public function show()
    {
        $resultados = DassResult::where('user_id', auth()->id())->latest()->first();

        return view('prueba.resultados', compact('resultados'));
    }
}