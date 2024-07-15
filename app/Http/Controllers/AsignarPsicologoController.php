<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\psicologo_paciente;
use App\Models\Psicologos;
use App\Models\Paciente;
use App\Models\Cita;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
        $id = auth()->user()->id;
        $psicologo = Psicologos::where('id_user', $request['idpsico'])->first();
        $paciente = Paciente::where('id_user', $id)->first();
        $verificacion = psicologo_paciente::where('paciente_id', $paciente->id)->first();
        if (empty($verificacion)) {
            $psicolog_paciente = psicologo_paciente::create([
                'psicologo_id' => $psicologo->id,
                'paciente_id' => $paciente->id
            ]);
            $cita = Cita::create([
                'motivo'=>"Primera Cita",
                'fechaConsulta'=>$request->FechaPiCita,
                'horaConsulta'=>$request->HoraCita,
                'psicologo_id' => $psicologo->id,
                'paciente_id' => $paciente->id
            ]);
            $psicolog_paciente->save();
            $cita->save();
            return response()->json(['success' => true, 'redirect' => route('panelPaciente')]);
        } else {
            return response()->json(['success' => false, 'message' => 'Ya tienes asignado un psicólogo']);
        }
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
