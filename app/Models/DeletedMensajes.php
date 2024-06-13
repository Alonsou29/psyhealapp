<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletedMensajes extends Model
{
    use HasFactory;

    public function mensaje(){
        return $this->hasOne('App\Models\Mensajes');
    }
}
