<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Support\Facades\Storage;

class Chat extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre', 'img_url', 'group_chat'
    ];

    //mutadores
    public function nombre():Attribute{
        return new Attribute(
            get: function($value){
                if($this->group_chat){
                    return $value;
                }

                $user=$this->users->where('id', '!=', auth()->id())->first();

                $contact = auth()->user()->contacts()->where('contact_id',$user->id)->first();

                return $user->email;
            }
        );
    }

    public function image(): Attribute{
        return new Attribute(
            get:function(){
                if($this->group_chat){
                    return Storage::ur($this->img_url);
                }

            $user=$this->users->where('id', '!=', auth()->id())->first();

            return $user->profile_photo_path;
            }
        );
    }

    //relacion uno a muchos
    public function mensaje(){
        return $this->hasMany('App\Models\Mensaje');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
