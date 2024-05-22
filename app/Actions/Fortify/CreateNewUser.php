<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            // 'first_name'=> ['required', 'string', 'max:255'],
            // 'second_name'=> ['required', 'string', 'max:255'],
            // 'last_name'=> ['required', 'string', 'max:255'],
            // 'second_last_name'=> ['required', 'string', 'max:255'],
            // 'cedula'=> ['required', 'integer', 'max:9'],
            // 'telefono'=> ['required', 'integer', 'max:12'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
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
    }
}
