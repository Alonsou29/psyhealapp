<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    // public function Psicologo(){
    //     return $this->belongsTo('App\Models\Psicologo', 'idPsicologo');
    // }

    public function cita(){
        return $this->hasOne('App\Models\Cita');
    }

    public function Psicologo_paciente(){
        return $this->belongsToMany('App\Models\psicologo_paciente');
    }

}
