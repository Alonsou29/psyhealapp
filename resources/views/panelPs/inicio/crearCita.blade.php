@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content_header')
    <h1 class="text-2xl font-semibold">Crear Nueva Cita</h1>
@stop

@section('content')
<div class="container mx-auto py-6">
    <div class="md:w-10/12 lg:w-8/12 mx-auto">
        <div class="bg-cartas shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form id="crearCitaForm" action="{{route('Citas.store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="paciente" class="block text-gray-700 text-sm font-bold mb-2">Buscar Paciente</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="paciente" name="paciente" autocomplete="off" placeholder="Ingrese la cédula del paciente (xxxxxxx-x) "required pattern="[0-9]{7,8}" inputmode="numeric" minlength="7" maxlength="8" oninput="this.value = this.value.replace(/[^\d]/g, '').slice(0, 8)">
                    <div id="pacienteList"></div>
                    <input type="hidden" id="paciente_id" name="paciente_id">
                </div>
                <div class="mb-4">
                    <label for="paciente" class="block text-gray-700 text-sm font-bold mb-2">Motivo de Consulta</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="motivo" name="motivo" autocomplete="off">
                </div>
                <div class="mb-4">
                    <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Fecha</label>
                    <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha" name="fecha">
                </div>
                <div class="mb-6">
                    <label for="hora" class="block text-gray-700 text-sm font-bold mb-2">Hora</label>
                    <input type="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hora" name="hora"  min="08:00" max="20:00">
                </div>
                <button type="submit" class="bg-sky-600 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Asignar Cita</button>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('crearCitaForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = this;
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Cita asignada correctamente',
                        text: 'Redirigiendo a las citas...',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false,
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => console.error('Error:', error));
        });

        // Validación de fecha para no permitir fechas anteriores al día actual y un año después
        document.getElementById('fecha').addEventListener('change', function () {
            const selectedDate = new Date(this.value);
            const currentDate = new Date();
            const maxDate = new Date(currentDate.getFullYear() + 1, currentDate.getMonth(), currentDate.getDate());

            if (selectedDate < currentDate || selectedDate > maxDate) {
                Swal.fire({
                    icon: 'error',
                    title: 'Fecha inválida',
                    text: 'Selecciona una fecha válida (no anterior a hoy ni más de un año en el futuro).',
                });
                this.value = ''; // Limpiar el valor de la fecha
            }
        });
    </script>


@stop
