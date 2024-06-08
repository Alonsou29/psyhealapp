<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $fillable=[
        'body','is_read','user_id','chat_id'
    ];

    //relaicon uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function chat(){
        return $this->belongsTo('App\Models\Chat');
    }
}