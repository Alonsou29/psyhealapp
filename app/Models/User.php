<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'second_name',
        'last_name',
        'second_last_name',
        'cedula',
        'telefono',
        'genero',
        'birthdate',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function paciente()
    {
        return $this->hasOne(Paciente::class, 'id_user');
    }

    public function psicologo(){
        return $this->hasOne(Psicologos::class, 'id_user');
    }


    public function comentarios(){
        return $this->hasMany('App\Models\Comentario');
    }

    //relacion uno a muchos
    public function contacts(){
        return $this->hasMany('App\Models\Contact');
    }

    public function mensajes(){
        return $this->hasMany('App\Models\Mensaje');
    }

    //relacion muchos a muchos

    public function chats(){
        return $this->belongsToMany('App\Models\Chat')->withPivot('color','active')
        ->withTimestamps();
    }
    
    // Relación con resultados del test DASS
    public function dassResults(){
        return $this->hasMany('App\Models\DassResult');
    }


    public function adminlte_image(){
       return '/storage/{{auth()->user()->profile_photo_path}}';
    }
}
