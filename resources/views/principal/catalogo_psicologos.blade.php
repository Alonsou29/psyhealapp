@extends('adminlte::page')
@vite('resources/css/app.css')

@php
    use App\Models\Psicologos;
    use App\Models\User;

    $psicolos = Psicologos::all();
@endphp

@section('content_header')
    <h1>Catálogo de Psicólogos</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Psicólogos</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($psicolos as $psico)
                                @php
                                    $datospsico = User::find($psico->id_user);
                                    $post = $datospsico->id;
                                @endphp
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="w-full h-64">
                                                <img src="storage/{{ $datospsico->profile_photo_path }}" alt="" class="w-full h-full object-contain">
                                            </div>
                                            <h2 class="text-lg font-bold mb-2">Nombre: {{ $datospsico->first_name }}</h2>
                                            <p class="text-gray-700 mb-2">Cédula: {{ $datospsico->cedula }} </p>
                                            <p class="text-gray-700 mb-4">Enfoque: Ansiedad</p>
                                            <form class="asignar-psicologo-form" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{$post}}" name="idpsico">
                                                <button class="btn btn-primary" type="submit">Seleccionar Psicólogo</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.asignar-psicologo-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);

                fetch("{{ route('AsignarPsicologo.store') }}", {
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
                            title: 'Psicólogo asignado!',
                            text: 'Redirigiendo al panel del paciente...',
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
        });
    </script>
@stop
