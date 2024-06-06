<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion',
        'estado',
        'parent_id',
        'user_id',
        'post_id'
   ];

   public function post(){
    return $this->belongsTo('App\Models\Post');
        }

    public function user(){
        return $this->belongsTo('App\Models\User');
        }

    public function parent(){
        return $this->belongsTo('App\Models\Comentario', 'parent_id');
    }

    public function respuestas(){
        return $this->hasMany('App\Models\Comentario', 'parent_id');
    }
}
