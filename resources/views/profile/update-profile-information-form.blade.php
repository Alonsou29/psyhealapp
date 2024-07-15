<div>
    <x-form-section submit="updateProfileInformation" x-on:submit="return validateForm(event)">
        <x-slot name="form">
            <!-- Profile Photo -->
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div x-data="{photoName: true, photoPreview: null}" class="text-center col-span-6 sm:col-span-4">
                    <!-- Profile Photo File Input -->
                    <input type="file" id="photo" class="hidden"
                           wire:model="photo"
                           x-ref="photo"
                           x-on:change="
                               photoName = $refs.photo.files[0].name;
                               const reader = new FileReader();
                               reader.onload = (e) => {
                                   photoPreview = e.target.result;
                               };
                               reader.readAsDataURL($refs.photo.files[0]);
                           " />

                    <x-label for="photo" value="{{ __('Foto') }}" />

                    <!-- Current Profile Photo -->
                    <div class="mt-2 object-center m-auto" x-show="! photoPreview">
                        <img src="/storage/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->first_name }}" class="m-auto rounded-full h-20 w-20 object-cover">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="block m-auto rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                              x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Nueva Foto') }}
                    </x-secondary-button>

                    @if (Auth::user()->profile_photo_path)
                        <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                            {{ __('Quitar Foto') }}
                        </x-secondary-button>
                    @endif

                    <x-input-error for="photo" class="mt-2" />
                </div>
            @endif

            <!-- First Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="first_name" value="{{ __('Nombre') }}" />
                <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model="state.first_name" required autocomplete="first_name" pattern="[A-Za-z\s]+" inputmode="text" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '').slice(0, 20)" />
                <x-input-error for="first_name" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="last_name" value="{{ __('Apellido') }}" />
                <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model="state.last_name" required autocomplete="last_name" pattern="[A-Za-z\s]+" inputmode="text" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '').slice(0, 24)" />
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
                <x-input id="cedula" type="text" class="mt-1 block w-full" wire:model="state.cedula" required pattern="[0-9]{7,8}" inputmode="numeric" minlength="7" maxlength="8" oninput="this.value = this.value.replace(/[^\d]/g, '').slice(0, 8)" placeholder="xxxxxxxx"  />
                <x-input-error for="cedula" class="mt-2" />
            </div>

            <!-- Telefono -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="telefono" value="{{ __('Teléfono') }}" />
                <x-input id="telefono" type="text" class="mt-1 block w-full" wire:model="state.telefono" required pattern="^(0424|0414|0412|0416|0426)\d{7}$" inputmode="numeric" maxlength="11" oninput="this.value = this.value.replace(/[^\d]/g, '').slice(0, 11)" placeholder="04xx-xxx-xxx" />
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

            <!-- Descripcion  -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="Descripcion" value="{{ __('Descripción') }}" />
                <textarea id="Descripcion" class="mt-1 block w-full" wire:model="state.Descripcion" ></textarea>
                <x-input-error for="Descripcion" class="mt-2" />
            </div>

        <!-- Input para Universidad -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="Universidad" value="{{ __('Universidad') }}" />
            <x-input id="Universidad" type="text" class="mt-1 block w-full" wire:model="state.Universidad"  />
            <x-input-error for="Universidad" class="mt-2" />
        </div>

        <!-- Input para Especialidad -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="Especialistas" value="{{ __('Especialidad') }}" />
            <x-input id="Especialistas" type="text" class="mt-1 block w-full" wire:model="state.Especialistas"  />
            <x-input-error for="Especialistas" class="mt-2" />
        </div>
            @endif
        </x-slot>

        <x-slot name="actions">
            <x-action-message class="me-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button id="saveButton" wire:loading.attr="disabled" wire:target="photo" class="bg-fondo">
                {{ __('Guardar Cambios') }}
            </x-button>
        </x-slot>
    </x-form-section>
</div>

<!-- Sweetalert2 CDN -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script de JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Escuchar evento 'saved' de Livewire
        Livewire.on('saved', function () {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Tu información de perfil ha sido actualizada correctamente.',
            });
        });
    });

    function validateForm(event) {
        const telefono = document.getElementById("telefono").value;
        const cedula = document.getElementById("cedula").value;

        // Validación del teléfono
        const telefonoRegex = /^(0424|0414|0412|0416|0426)\d{7}$/; // Expresión regular para validar teléfonos
        if (!telefonoRegex.test(telefono)) {
            Swal.fire({
                icon: 'error',
                title: 'Teléfono inválido',
                text: 'El teléfono debe comenzar con 0424, 0414, 0412, 0416 o 0426 seguido de 7 números adicionales.'
            });
            event.preventDefault(); // Evita que el formulario se envíe si la validación falla
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
            event.preventDefault(); // Evita que el formulario se envíe si la validación falla
            return false;
        }

        // Validación específica de la cédula no mayor a 35 millones
        const cedulaNumber = parseInt(cedula, 10);
        if (cedulaNumber > 36000000) {
            Swal.fire({
                icon: 'error',
                title: 'Cédula inválida',
                text: 'La cédula no puede ser tan mayor .'
            });
            event.preventDefault(); // Evita que el formulario se envíe si la validación falla
            return false;
        }

        return true;

        
    }
</script>
