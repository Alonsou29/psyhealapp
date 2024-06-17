
<div>
    <x-form-section submit="updateProfileInformation">
        <x-slot name="form">
            <!-- Profile Photo -->
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div x-data="{photoName: true, photoPreview: null}" class="col-span-6 sm:col-span-4">
                    <!-- Profile Photo File Input -->
                    <input type="file" id="photo" class="hidden"
                           wire:model="photo"
                           x-ref="photo"
                           x-on:change="
                               photoName = $refs.photo.files[0].first_name;
                               const reader = new FileReader();
                               reader.onload = (e) => {
                                   photoPreview = e.target.result;
                               };
                               reader.readAsDataURL($refs.photo.files[0]);
                           " />

                    <x-label for="photo" value="{{ __('Photo') }}" />

                    <!-- Current Profile Photo -->
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="/storage/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->first_name }}" class="rounded-full h-20 w-20 object-cover">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                              x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Select A New Photo') }}
                    </x-secondary-button>

                    @if (Auth::user()->profile_photo_path)
                        <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                            {{ __('Remove Photo') }}
                        </x-secondary-button>
                    @endif

                    <x-input-error for="photo" class="mt-2" />
                </div>
            @endif

            <!-- First Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="first_name" value="{{ __('First Name') }}" />
                <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model="state.first_name" required autocomplete="first_name" />
                <x-input-error for="first_name" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="last_name" value="{{ __('Last Name') }}" />
                <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model="state.last_name" required autocomplete="last_name" />
                <x-input-error for="last_name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required autocomplete="username" />
                <x-input-error for="email" class="mt-2" />

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! Auth::user()->hasVerifiedEmail())
                    <p class="text-sm mt-2">
                        {{ __('Your email address is unverified.') }}

                        <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if ($this->verificationLinkSent)
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                @endif
            </div>

            <!-- Cedula -->
            <div class="col-span-3 sm:col-span-4">
                <x-label for="cedula" value="{{ __('Cédula') }}" />
                <x-input id="cedula" type="text" class="mt-1 block w-full" wire:model="state.cedula" required />
                <x-input-error for="cedula" class="mt-2" />
            </div>

            <!-- Telefono -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="telefono" value="{{ __('Teléfono') }}" />
                <x-input id="telefono" type="text" class="mt-1 block w-full" wire:model="state.telefono" required />
                <x-input-error for="telefono" class="mt-2" />
            </div>

            @if (auth()->user()->hasRole('paciente'))
            <!-- Descripcion del Problema -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="descripcion_problema" value="{{ __('Descripción del Problema') }}" />
                <textarea id="descripcion_problema" class="mt-1 block w-full" wire:model="state.descripcion_problema" ></textarea>
                <x-input-error for="descripcion_problema" class="mt-2" />
            </div>

            <!-- Biografia -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="Biografia" value="{{ __('Biografía') }}" />
                <textarea id="Biografia" class="mt-1 block w-full" wire:model="state.Biografia" ></textarea>
                <x-input-error for="Biografia" class="mt-2" />
            </div>

            @elseif (auth()->user()->hasRole('psicologo'))
             <!-- Input para Imagen de Diploma -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="Diploma" value="{{ __('Imagen de Diploma') }}" />
            <input id="Diploma" type="file" name="Diploma" class="mt-4 bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <!-- Puedes añadir wire:model="state.imagen_diploma" si deseas manejar la carga de la imagen con Livewire -->
             <x-input-error for="Diploma" class="mt-2" /> 
        </div>

            <!-- Descripcion  -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="Descripcion" value="{{ __('Descripción del Problema') }}" />
                <textarea id="Descripcion" class="mt-1 block w-full" wire:model="state.Descripcion" ></textarea>
                <x-input-error for="Descripcion" class="mt-2" />
            </div>

        <!-- Input para Universidad -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="Universidad" value="{{ __('Universidad') }}" />
            <x-input id="Universidad" type="text" class="mt-1 block w-full" wire:model="state.Universidad" required />
            <x-input-error for="Universidad" class="mt-2" />
        </div>

        <!-- Input para Especialidad -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="Especialidad" value="{{ __('Especialidad') }}" />
            <x-input id="Especialidad" type="text" class="mt-1 block w-full" wire:model="state.Especialidad" required />
            <x-input-error for="Especialidad" class="mt-2" />
        </div>
            @endif
        </x-slot>

        <x-slot name="actions">
            <x-action-message class="me-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button id="saveButton" wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-form-section>

 <!-- Modal para mostrar el resultado -->
 <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modalContent">
                <p id="modalMessage"></p>
                <img id="successImage" src="https://www.freeiconspng.com/thumbs/success-icon/success-icon-10.png" style="display: none; max-width: 100px; margin: 0 auto;" />
            </div>
        </div>
    </div>

    <!-- Estilos CSS para el modal -->
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #E2F3FB;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            text-align: center;
            position: relative;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <!-- Script JavaScript para manejar el modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const saveButton = document.getElementById('saveButton');
            const modal = document.getElementById('myModal');
            const modalMessage = document.getElementById('modalMessage');
            const successImage = document.getElementById('successImage');
            const modalContent = document.getElementById('modalContent');
            const closeButton = document.getElementsByClassName("close")[0];

            saveButton.addEventListener('click', function() {
                // Simular respuesta del servidor
                const savedSuccessfully = true; // Cambiar a false para simular error
                const errorMessage = "No se pudieron guardar los cambios.";

                if (savedSuccessfully) {
                    modalMessage.innerText = "Cambios guardados exitosamente.";
                    successImage.style.display = "block";
                } else {
                    modalMessage.innerText = errorMessage;
                    successImage.style.display = "none";
                }

                modal.style.display = "block";
                setTimeout(function() {
                    modal.style.display = "none";
                }, 5000); // Cambiado a 5000 milisegundos = 5 segundos
            });

            closeButton.onclick = function() {
                modal.style.display = "none";
            };

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        });
    </script>
</div>
