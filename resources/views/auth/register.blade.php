<x-guest-layout>
    <title>Registro</title>

    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    <!-- Agregar esto en la sección <head> de tu plantilla -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="min-h-screen bg-login text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-start flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                
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
                    <h1 class="text-2xl xl:text-2xl font-extrabold mt-12 text-center">Registro</h1>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <div class="w-full bg-gray-300 rounded-full">
                                <div id="progress-bar" class="bg-blue-500 text-xs leading-none py-1 text-center text-white rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="mt-2 text-center">
                            <span id="stepIndicator">Paso 1 de 2</span>
                        </div>
                    </div>
                    <x-validation-errors class="mb-4" />
                    <form id="regForm" method="POST" action="{{ route('register') }}" class="w-full mt-8">
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
                                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="given-name" required pattern="[A-Za-z\s]+" inputmode="text" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '').slice(0, 20)" />
                                </div>

                                <div>
                                    <x-label for="second_name" value="{{ __('Segundo Nombre:') }}" />
                                    <x-input id="second_name" class="block mt-1 w-full" type="text" name="second_name" :value="old('second_name')" autocomplete="given-name"  pattern="[A-Za-z\s]+" inputmode="text" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '').slice(0, 20)" />
                                </div>

                                <div>
                                    <x-label for="last_name" value="{{ __('Apellido:') }}" />
                                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" required pattern="[A-Za-z\s]+" inputmode="text" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '').slice(0, 24)" />
                                </div>

                                <div>
                                    <x-label for="second_last_name" value="{{ __('Segundo Apellido:') }}" />
                                    <x-input id="second_last_name" class="block mt-1 w-full" type="text" name="second_last_name" :value="old('second_last_name')" autocomplete="family-name" required pattern="[A-Za-z\s]+" inputmode="text" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '').slice(0, 24)" />
                                </div>

                                <div>
                                    <x-label for="cedula" value="{{ __('Cédula:') }}" />
                                    <x-input id="cedula" class="block mt-1 w-full border border-gray-300 rounded-md px-4 py-2" type="text" name="cedula" :value="old('cedula')" autocomplete="off" required pattern="[0-9]{7,8}" inputmode="numeric" minlength="7" maxlength="8" oninput="this.value = this.value.replace(/[^\d]/g, '').slice(0, 8)" placeholder="xxxxxxxx" />
                                </div>



                                <div>
                                    <x-label for="telefono" value="{{ __('Teléfono:') }}" />
                                    <x-input id="telefono" class="block mt-1 w-full border border-gray-300 rounded-md px-4 py-2" type="text" name="telefono" :value="old('telefono')" autocomplete="tel" required pattern="\d+" inputmode="numeric" maxlength="11" oninput="this.value = this.value.replace(/[^\d]/g, '').slice(0, 11)" placeholder="04xx-xxx-xxx" />
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
                                    <x-label for="birthdate" value="{{ __('Fcha. Nacimiento:') }}" />
                                    <x-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <button type="button" id="prevBtn" class="hidden bg-gray-500 text-white px-4 py-2 rounded-md">Anterior</button>
                            <button type="button" id="nextBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md">Siguiente</button>
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
                                        <div class="ms-2">
                                            {!! __('Acepto los :terminos_de_servicio y la :politica_de_privacidad', [
                                                'terminos_de_servicio' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Términos de servicio').'</a>',
                                                'politica_de_privacidad' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Política de privacidad').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-900" href="{{ route('login') }}">
                                {{ __('¿Ya estás registrado?') }}
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

    <script>
    var currentStep = 0;
    var steps = document.querySelectorAll(".step");
    var nextBtn = document.getElementById("nextBtn");
    var prevBtn = document.getElementById("prevBtn");
    var progressBar = document.getElementById("progress-bar");
    var stepIndicator = document.getElementById("stepIndicator");

    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            step.classList.toggle("hidden", index !== stepIndex);
        });

        if (stepIndex === 0) {
            prevBtn.classList.add("hidden");
            nextBtn.innerHTML = "Siguiente";
        } else {
            prevBtn.classList.remove("hidden");
            nextBtn.innerHTML = "Registrar";
        }

        stepIndicator.textContent = `Paso ${stepIndex + 1} de ${steps.length}`;
    }

    function updateProgressBar() {
        var progress = ((currentStep + 1) / steps.length) * 100;
        progressBar.style.width = `${progress}%`;
    }

    function validateStep1() {
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const passwordConfirmation = document.getElementById("password_confirmation").value;
        return email !== "" && password !== "" && passwordConfirmation !== "";
    }

    function validateStep2() {
        const first_name = document.getElementById("first_name").value;
        const second_name = document.getElementById("second_name").value;
        const last_name = document.getElementById("last_name").value;
        const second_last_name = document.getElementById("second_last_name").value;
        const cedula = document.getElementById("cedula").value;
        const telefono = document.getElementById("telefono").value;
        const genero = document.getElementById("genero").value;
        const birthdate = document.getElementById("birthdate").value;

        // Verificar que todos los campos requeridos estén llenos
        if (
            first_name === "" ||
            last_name === "" ||
            second_last_name === "" ||
            cedula === "" ||
            telefono === "" ||
            genero === "disable" ||
            birthdate === ""
        ) {
            Swal.fire({
                icon: 'error',
                title: 'Campos requeridos incompletos',
                text: 'Por favor completa todos los campos requeridos en este paso.'
            });
            return false;
        }

        // Validación del teléfono
        const telefonoRegex = /^(0424|0414|0412|0416|0426)\d{7}$/; // Expresión regular para validar teléfonos
        if (!telefonoRegex.test(telefono)) {
            Swal.fire({
                icon: 'error',
                title: 'Teléfono inválido',
                text: 'El teléfono debe comenzar con 0424, 0414, 0412, 0416 o 0426 seguido de 7 números adicionales.'
            });
            return false;
        }

        // Validación de la cédula
        const cedulaRegex = /^[0-9]{7,8}$/; // Expresión regular para validar cédula
        if (!cedulaRegex.test(cedula)) {
            Swal.fire({
                icon: 'error',
                title: 'Cédula inválida',
                text: 'La cédula debe tener entre 7 y 8 dígitos numéricos.'
            });
            return false;
        }

        // Validación específica de la cédula no mayor a 35 millones
        const cedulaNumber = parseInt(cedula, 10);
            if (cedulaNumber > 35000000) {
                Swal.fire({
                    icon: 'error',
                    title: 'Cédula inválida',
                    text: 'La cédula no puede ser tan mayor.'
                });
                return false;
         }

        return true;
    }

    nextBtn.addEventListener("click", () => {
        if (currentStep === steps.length - 1) {
            // Último paso, submit del formulario
            if (validateStep2()) {
                document.getElementById("regForm").submit();
            }
        } else {
            if (currentStep === 0 && !validateStep1()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Campos requeridos incompletos',
                    text: 'Por favor completa todos los campos requeridos en este paso.'
                });
                return;
            }

            currentStep++;
            showStep(currentStep);
            updateProgressBar();
        }
    });

    prevBtn.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
            updateProgressBar();
        }
    });

    // Validación de cédula antes de enviar el formulario
    document.getElementById('regForm').addEventListener('submit', function(event) {
        // Obtener el valor del campo de cédula
        const cedula = document.getElementById('cedula').value;

        // Verificar la longitud de la cédula
        if (cedula.length < 7 || cedula.length > 8) {
            event.preventDefault(); // Detener el envío del formulario
            Swal.fire({
                icon: 'error',
                title: 'Cédula inválida',
                text: 'La cédula debe tener entre 7 y 8 caracteres numéricos.'
            });
        }
    });

    showStep(currentStep);
    updateProgressBar();
</script>



    <script>
        document.getElementById('birthdate').addEventListener('change', function () {
            const birthdate = new Date(this.value);
            const today = new Date();
            let age = today.getFullYear() - birthdate.getFullYear();
            const m = today.getMonth() - birthdate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
                age--;
            }

            if (age < 18) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Debes tener al menos 18 años para registrarte.",
            });
            this.value = ""; // Clear the invalid input
        } else if (age > 90) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Debes tener menos de 90 años para registrarte.",
            });
            this.value = ""; // Clear the invalid input
        }
    });

        document.querySelector('form').addEventListener('submit', function (event) {
            const birthdate = document.getElementById('birthdate').value;
            if (!birthdate) {
                event.preventDefault();
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Por favor, ingresa una fecha de nacimiento válida.",
                });
            }
        });
    </script>
</x-guest-layout>
