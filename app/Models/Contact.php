<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'nombre','user_id','contact_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','contact_id');
    }
}
