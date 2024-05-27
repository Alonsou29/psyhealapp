<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use App\Models\Psicologos;
class loginPaciente extends Controller
{
    use PasswordValidationRules;

    public function registroPsicologo(Request $input):User
    {
        // Validator::make($input, [
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => $this->passwordRules(),
        //     //esto es lo que esta en duda
        //     'first_name'=> ['required', 'string', 'max:255', 'min:4'],
        //     'second_name'=> ['required', 'string', 'max:255', 'min:4'],
        //     'last_name'=> ['required', 'string', 'max:255', 'min:4'],
        //     'second_last_name'=> ['required', 'string', 'max:255', 'min:4'],
        //     'universidad' => ['required', 'string'],
        //     //'cedula'=> ['required', 'integer', 'max:1', 'min:7'],
        //     //'telefono'=> ['required', 'integer', 'max:12'],
        //     //hasta aqui
        //     'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        // ])->validate();

        $user= User::create([
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'first_name' => $input['first_name'],
            'second_name' => $input['second_name'],
            'last_name' => $input['last_name'],
            'second_last_name' => $input['second_last_name'],
            'cedula' => $input['cedula'],
            'telefono' => $input['telefono'],
            'genero' => $input['genero'],
            'birthdate' => $input['birthdate'],
        ]);

        $psicologo= Psicologos::create([
            'Universidad' => $input['universidad'],
            'Diploma' => $input['diploma'],
            'Especialistas' => $input['especialidad'],
            'Descripcion' => $input['descripcion'],
            'id_user' => $user->id,
        ]);

        redirect(panelPs) ;

    }

}

