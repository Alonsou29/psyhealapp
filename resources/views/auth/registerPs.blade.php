<x-guest-layout>

    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    
    <div class="min-h-screen bg-login text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-start flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <x-validation-errors class="mb-4" />
                <a href="{{ route('welcome') }}" class="absolute top-16 flex items-center text-cyan-600 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span>Volver</span>
                </a>
                <div class="mt-12">
                    <div class="text-center">
                        <h1 class="text-2xl xl:text-3xl font-extrabold">Bienvenidos a Psyheal!</h1>
                    </div>
                    <h1 class="text-2xl xl:text-2xl font-extrabold mt-12 text-center">Registro Psicólogos</h1>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <div class="flex-1 h-2 bg-blue-500" id="progress-bar"></div>
                            <div class="flex-1 h-2 bg-gray-300"></div>
                        </div>
                        <div class="mt-2 text-center">
                            <span id="stepIndicator">Paso 1 de 3</span>
                        </div>
                    </div>

                    <form id="regForm" method="POST" action="{{ route('registrops') }}" class="w-full mt-8" name="resgiP" enctype="multipart/form-data">
                        @csrf

                        <!-- Step 1: Información de cuenta -->
                        <div class="step">
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
                        </div>

                        <!-- Step 2: Información personal -->
                        <div class="step hidden">
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
                                    <x-input id="cedula" class="block mt-1 w-full border border-gray-300 rounded-md px-4 py-2" type="text" name="cedula" :value="old('cedula')" autocomplete="off" />
                                </div>

                                <div>
                                    <x-label for="telefono" value="{{ __('Teléfono:') }}" />
                                    <x-input id="telefono" class="block mt-1 w-full border border-gray-300 rounded-md px-4 py-2" type="text" name="telefono" :value="old('telefono')" autocomplete="tel" />
                                </div>

                                <div>
                                    <x-label for="genero" value="{{ __('Género:') }}" />
                                    <select id="genero" name="genero" class="block mt-1 w-full border-gray-300 rounded-md">
                                        <option value="disable">Indique el género</option>
                                        <option value="hombre">Hombre</option>
                                        <option value="mujer">Mujer</option>
                                    </select>
                                </div>

                                <div>
                                    <x-label for="birthdate" value="{{ __('Fecha. Nacimiento:') }}" />
                                    <x-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Información Psicólogo -->
                        <div class="step hidden">
                            <div class="mt-4">
                                <x-label for="universidad" value="{{ __('Universidad:') }}" />
                                <x-input id="universidad" class="block mt-1 w-full" type="text" name="universidad" :value="old('universidad')" required autocomplete="off" />
                            </div>

                            <div class="mt-4">
                                <x-label for="diploma" value="{{ __('Diploma:') }}" />
                                <x-input id="diploma" class="block mt-1 w-full" type="text" name="diploma" :value="old('diploma')" required autocomplete="off" />
                            </div>

                            <div class="mt-4">
                                <x-label for="especialidad" value="{{ __('Especialidad:') }}" />
                                <x-input id="especialidad" class="block mt-1 w-full" type="text" name="especialidad" :value="old('especialidad')" required autocomplete="off" />
                            </div>

                            <div class="mt-4">
                                <x-label for="descripcion" value="{{ __('Descripción:') }}" />
                                <textarea id="descripcion" class="block mt-1 w-full border-gray-300 rounded-md" name="descripcion" rows="4" :value="old('descripcion')" required></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="imagen" class="block text-gray-700 text-sm font-bold mb-2">Imagen</label>
                                <input type="file" name="imagen" class="mt-2 bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <button type="button" id="prevBtn" class="hidden bg-gray-500 text-white px-4 py-2 rounded-md">Anterior</button>
                            <button type="button" id="nextBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md">Siguiente</button>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __(' Estas registrado?') }}
                            </a>
                        </div>

                    </form>

                </div>
            </div>
            <div class="flex-1 bg-cartas text-center lg:flex rounded-3xl">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('https://www.dropbox.com/scl/fi/5bztcsif7p9zwp49ia9oc/login.png?rlkey=44h12n5jxic27o7e1r41aemth&st=am3lccvj&raw=1');">
                </div>
            </div>
        </div>
    </div>

    <style>
        .hidden {
            display: none;
        }
    </style>

    <script>
        const steps = document.querySelectorAll('.step');
        let currentStep = 0;
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const stepIndicator = document.getElementById('stepIndicator');
        const progressBar = document.getElementById('progress-bar');

        function showStep(n) {
            steps.forEach((step, index) => {
                step.classList.toggle('hidden', index !== n);
            });
            prevBtn.classList.toggle('hidden', n === 0);
            nextBtn.textContent = n === steps.length - 1 ? 'Registrarse' : 'Siguiente';
            stepIndicator.textContent = `Paso ${n + 1} de ${steps.length}`;
            progressBar.style.width = `${(n + 1) * (100 / steps.length)}%`;
        }

        nextBtn.addEventListener('click', () => {
            if (currentStep === steps.length - 1) {
                document.getElementById('regForm').submit();
            } else {
                currentStep++;
                showStep(currentStep);
            }
        });

        prevBtn.addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });

        showStep(currentStep);
    </script>

</x-guest-layout>
