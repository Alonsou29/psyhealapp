<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DassResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DassController extends Controller
{
    public function calcularNivelesDass(Request $request)
    {
        // Obtener las respuestas del formulario
        $respuestas = $request->except('_token');

        // Definir ítems correspondientes a cada subescala
        $subescalas = [
            'depresion' => [3, 5, 10, 13, 16, 17, 21],
            'ansiedad' => [2, 4, 7, 9, 15, 19, 20],
            'estres' => [1, 6, 8, 11, 12, 14, 18],
        ];

        // Calcular puntajes para cada subescala
        $resultados = [
            'depresion' => 0,
            'ansiedad' => 0,
            'estres' => 0,
        ];

        foreach ($subescalas as $escala => $items) {
            foreach ($items as $item) {
                if (isset($respuestas["pregunta$item"])) {
                    $resultados[$escala] += (int)$respuestas["pregunta$item"];
                }
            }
        }

        // Guardar resultados en la base de datos
        $user = Auth::user();
        
        $dassResult = new DassResult();
        $dassResult->user_id = $user->id;
        $dassResult->ansiedad = $resultados['ansiedad'];
        $dassResult->depresion = $resultados['depresion'];
        $dassResult->estres = $resultados['estres'];
        $dassResult->save();

        // Redirigir a la vista de resultados
        return redirect()->route('resultados')->with('success', 'Resultados guardados exitosamente.');
    }
}