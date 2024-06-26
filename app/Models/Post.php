<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'categoria_id',
      
    ];

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function comentarios(){
        return $this->hasMany('App\Models\Comentario')->whereNull('parent_id');
    }
}
