<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, mixed>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'cedula' => ['required', 'string', 'max:20'],
            'telefono' => ['required', 'string', 'max:20'],
            // No validamos `descripcion_problema` y `biografia` aquí porque están en `Paciente`
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email' => $input['email'],
                'cedula' => $input['cedula'],
                'telefono' => $input['telefono'],
            ])->save();

            // Actualizamos los campos de la relación `Paciente`
            if ($user->paciente) {
                $user->paciente->forceFill([
                    'descripcion_problema' => $input['descripcion_problema'] ?? $user->paciente->descripcion_problema,
                    'Biografia' => $input['Biografia'] ?? $user->paciente->Biografia,
                ])->save();
            }

            if ($user->psicologo) {
                $user->psicologo->forceFill([
                    'Diploma' => $input['Diploma'] ?? $user->psicologo->Diploma,
                    'Descripcion' => $input['Descripcion'] ?? $user->psicologo->Descripcion,
                    'Universidad' => $input['Universidad'] ?? $user->psicologo->Universidad,
                    'Especialistas' => $input['Especialistas'] ?? $user->psicologo->Especialistas,
                ])->save();
            }
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'cedula' => $input['cedula'],
            'telefono' => $input['telefono'],
        ])->save();

        // Actualizamos los campos de la relación `Paciente`
        if ($user->paciente) {
            $user->paciente->forceFill([
                'descripcion_problema' => $input['descripcion_problema'] ?? $user->paciente->descripcion_problema,
                'Biografia' => $input['Biografia'] ?? $user->paciente->Biografia,
            ])->save();
        }

        if ($user->psicologo) {
            $user->psicologo->forceFill([
                'Diploma' => $input['Diploma'] ?? $user->psicologo->Diploma,
                'Descripcion' => $input['Descripcion'] ?? $user->psicologo->Descripcion,
                'Universidad' => $input['Universidad'] ?? $user->psicologo->Universidad,
                'Especialistas' => $input['Especialistas'] ?? $user->psicologo->Especialistas,
            ])->save();
        }

        $user->sendEmailVerificationNotification();
    }
}
