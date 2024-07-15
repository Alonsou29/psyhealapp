<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Psicologos;
use App\Models\User;
use App\Models\Paciente;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $psicologo = Psicologos::where('id_user', auth()->user()->id)->first();
        $citas = Cita::where('psicologo_id', $psicologo->id)->get();
        return view('PanelPs.inicio.index_misCitasPs', compact("citas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panelPs.inicio.crearCita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pacienteUser = User::where('cedula', $request['paciente'])->first();
        $paciente = Paciente::where('id_user', $pacienteUser->id)->first();

        $psico = Psicologos::where('id_user', auth()->user()->id)->first();
        $citasVerfi = Cita::where('paciente_id', $pacienteUser->id);
        if(empty($citasVerfi)){
            if(!empty($paciente)){
                $cita = Cita::create([
                    'motivo'=>$request->motivo,
                    'fechaConsulta'=>$request->fecha,
                    'horaConsulta'=>$request->hora,
                    'paciente_id'=>$paciente->id,
                    'psicologo_id'=>$psico->id,
                ]);
                $cita->save();

                return redirect('/Citas');
            }else{
                echo "No hay paciente registado con esa cedula";
                //aqui una alerta y redireccionar al registro de citas
            }
        }else{
            echo "Un paciente No puede tener mas de una cita";
            //aqui una alerta y redireccionar al registro de citas
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
        $cita = Cita::find($id);
        $cita->delete();
        return redirect('/Citas');
    }
}
