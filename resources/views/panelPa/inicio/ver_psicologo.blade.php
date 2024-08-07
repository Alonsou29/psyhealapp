@extends('adminlte::page')
@vite('resources/css/app.css')

@php
    use App\Models\psicologo_paciente;
    use App\Models\Psicologos;
    use App\Models\User;
    use App\Models\Paciente;

    $paciente = Paciente::where('id_user', auth()->user()->id)->first();

    $busqueda = psicologo_paciente::where('paciente_id', $paciente->id)->first();

@endphp

@section('content')

<!-- component -->
@if (!empty($busqueda))
    @php
        $buscarpsicologo = Psicologos::find($busqueda->psicologo_id);
        $UserPsico = User::where('id',$buscarpsicologo->id_user)->first();
    @endphp

    <div class="mt-20"  >

        
        <div class="flex flex-col lg:flex-row justify-center items-start lg:space-x-5">
            <div class="bg-gray-100 lg:mr-5 mb-5 lg:mb-0 flex justify-center w-full lg:w-auto">
                <div class="max-w-lg bg-white rounded-lg shadow-md p-5">
                    <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('storage/' . $UserPsico->profile_photo_path) }}" alt="Foto de perfil" alt="Profile picture">
                    <h2 class="text-center text-2xl font-semibold mt-3">{{$UserPsico->first_name}} {{$UserPsico->last_name}}</h2>
                    <div class="mt-5">
                    </div>
                </div>
            </div>
    
            <div class="bg-white shadow-md rounded-lg lg:w-[700px] max-w-[95%] mx-auto p-3 lg:p-5">
                <div class=" mb-8 w-full ">
                    <h4 class="px-2 text-xl text-center font-bold text-navy-700 text-black">Información General</h4>
                </div>
                <div class="grid grid-cols-2 gap-4 px-2">
                    <div class="flex flex-col items-start justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                        <p class="text-sm font-bold text-gray-600">Teléfono</p>
                        <p class="text-base font-bold text-navy-700 dark:text-white">{{$UserPsico->telefono}}</p>
                    </div>
    
                    <div class="flex flex-col justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                        <p class="text-sm font-bold text-gray-600">Email</p>
                        <p class="text-base font-bold text-navy-700 dark:text-white">{{$UserPsico->email}}</p>
                    </div>
    
                    <div class="flex flex-col items-start justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                        <p class="text-sm font-bold text-gray-600">Fecha Nacimiento</p>
                        <p class="text-base font-bold text-navy-700 dark:text-white">{{$UserPsico->birthdate}}</p>
                    </div>
    
                    <div class="flex flex-col justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                        <p class="text-sm font-bold text-gray-600">Descripción</p>
                        <p class="text-base text-justify font-bold text-navy-700 dark:text-white">{{$buscarpsicologo->Descripcion}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
<div class="container">
    <div class="bg-gradiente mt-10 font-[sans-serif] p-6 rounded-3xl">
        <div class="container mx-auto flex flex-col justify-center items-center">
            <h2 class="text-white text-3xl font-bold mb-4"> No tienes Psicólogo Asignado</h2>
        </div>
    </div>
</div>
@endif

@stop
