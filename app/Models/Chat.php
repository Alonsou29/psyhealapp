<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre', 'img_url', 'group_chat'
    ];


    //relacion uno a muchos
    public function mensaje(){
        return $this->hasMany('App\Models\Mensaje');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
