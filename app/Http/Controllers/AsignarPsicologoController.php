<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\psicologo_paciente;
use App\Models\Psicologos;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class AsignarPsicologoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id= auth()->user()->id;
        $psicologo = Psicologos::where('id_user', $request['idpsico'])->first();
        $paciente = Paciente::where('id_user', $id)->first();
        $psicolog_paciente = psicologo_paciente::create([
            'psicologo_id' => $psicologo->id,
            'paciente_id' => $paciente->id
        ]);

        $psicolog_paciente->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
