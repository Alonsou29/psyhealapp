<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class psicologo_paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'psicologo_id', 'paciente_id'
    ];

    public function Pacientes(){
        return $this->hasMany('App\Models\Paciente');
    }

    public function Psicologos(){
        return $this->hasMany('App\Models\Psicologos');
    }

}
