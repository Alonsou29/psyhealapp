@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1 class="text-2xl font-semibold">Crear Nueva Cita</h1>
@stop

@section('content')
<div class="container mx-auto py-6">
    <div class="md:w-10/12 lg:w-8/12 mx-auto">
        <div class="bg-cartas shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{route('Citas.store')}}" method="POST" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="paciente" class="block text-gray-700 text-sm font-bold mb-2">Buscar Paciente</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="paciente" name="paciente" autocomplete="off">
                    <div id="pacienteList"></div>
                    <input type="hidden" id="paciente_id" name="paciente_id">
                </div>
                <div class="mb-4">
                    <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Fecha</label>
                    <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha" name="fecha">
                </div>
                <div class="mb-6">
                    <label for="hora" class="block text-gray-700 text-sm font-bold mb-2">Hora</label>
                    <input type="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hora" name="hora">
                </div>
                <button type="submit" class="bg-sky-600 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Asignar Cita</button>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
    <script>
        // Tu código JavaScript y Ajax aquí
    </script>
@stop
