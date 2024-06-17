<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable=[
        'motivo',
        'fechaConsulta',
        'horaConsulta',
        'paciente_id',
        'psicologo_id'
    ];

    public function paciente(){
        return $this->belongsTo('App\Models\Paciente');
    }
    public function psicologo(){
        return $this->belongsTo('App\Models\Psicologo');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
