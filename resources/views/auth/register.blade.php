<x-guest-layout>

    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    <x-validation-errors class="mb-4" />

    <div class="min-h-screen bg-login text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <a href="{{ route('welcome') }}" class="absolute top-16  flex items-center text-cyan-600 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span>Volver</span>
            </a>
                <div class="mt-12 flex flex-col items-center">
                    <div>
                    <h1 class="text-2xl xl:text-3xl font-extrabold  text-center">Bienvenidos a Psyheal!</h1>
                </div>
                    <h1 class="text-2xl xl:text-2xl font-extrabold mt-12 text-center">
                        Registro
                    </h1>


                    <form method="POST" action="{{ route('register') }}" class="w-full mt-8">
                        @csrf


                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-label for="first_name" value="{{ __('Nombre:') }}" />
                                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="given-name" />
                            </div>

                            <div>
                                <x-label for="second_name" value="{{ __('Segundo Nombre:') }}" />
                                <x-input id="second_name" class="block mt-1 w-full" type="text" name="second_name" :value="old('second_name')" autocomplete="given-name" />
                            </div>
                            
                            <div>
                                <x-label for="last_name" value="{{ __('Apellido:') }}" />
                                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" />
                            </div>
                            
                            <div>
                                <x-label for="second_last_name" value="{{ __('Segundo Apellido:') }}" />
                                <x-input id="second_last_name" class="block mt-1 w-full" type="text" name="second_last_name" :value="old('second_last_name')" autocomplete="family-name" />
                            </div>

                            <div>
                                <x-label for="cedula" value="{{ __('Cedula:') }}" />
                                <x-input id="cedula" class="block mt-1 w-full border border-gray-300 rounded-md px-4 py-2" type="int" name="cedula" :value="old('cedula')" autocomplete="off" />
                            </div>

                            <div>
                                <x-label for="telefono" value="{{ __('Teléfono:') }}" />
                                <x-input id="telefono" class="block mt-1 w-full border border-gray-300 rounded-md px-4 py-2" type="int" name="telefono" :value="old('telefono')" autocomplete="tel" />
                            </div>

                            <div>
                                <x-label for="genero" value="{{ __('Género:') }}" />
                                <select id="genero" name="genero" class="block mt-1 w-full">
                                    <option value="disable" >Indique el género</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                </select>
                            </div>

                            <div>
                                <x-label for="birthdate" value="{{ __('Fcha. Nacimiento:') }}" />
                                <x-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
                            </div>
                        </div>

                        <div class="mt-4">
                        <x-label for="email" value="{{ __('Email:') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Contraseña:') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña:') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ms-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __(' Estas registrado?') }}
                            </a>

                            <x-button class="ms-4 ">
                                {{ __('Registrarse') }}
                            </x-button>
                        </div>
                    </form>


                </div>
            </div>
            <div class="flex-1 bg-cartas text-center hidden lg:flex">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                    style="background-image: url('https://previews.dropbox.com/p/thumb/ACRJF5h8uTkASUvvRJBbOu1rZtho-woqbaMCaOPJoBupvREt6NpshQI7CtS1vq8DJUkEeVNF4OoV1elyYGC7i8qOZhw5B3I40Xaee2XZ11fvUeKCGlZGkGFZmXiUhV-Q3c0yWdP2aJkjoNsURiNrm5PHrQEu1TuRrfw-08OhzhAuWbP36ks6LuzQ9AiDIhYBsXBMdNOfr2W5LwI05RhQapbptdVYv3eMKuQTNGPSqmjumkUst8l1FS-QO2bPMYvvKnLmmlOfWBFR5hWT7W59JzZjktZZRGYi1nYBBtgqMn_w9R9klDL-eDcbMmCdMsYxga7njP6RJvdnCSoWCPqpSXc_R_ImvuFTidMCMd8RQTiK5Q/p.png');">
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
