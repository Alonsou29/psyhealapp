@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1 class="text-2xl font-semibold">Crear Categoría</h1>
@stop

@section('content')
<div class=" justify-center items-center ">
            <div class="container mx-auto">
                <div class="mt-20 flex justify-center">
                    <div class="w-full md:w-10/12 lg:w-8/12">
                        <form action="{{route('categorias.store')}}" method="POST" class="bg-cartas shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            @csrf
                            <div class='mb-4'>
                                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                <input type="text" placeholder="Nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class='mb-6'>
                                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción</label>
                                <textarea name="descripcion" placeholder="Descripción" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-sky-600 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="pt-36"></div>
        </div>
    </div>
</div>
@stop
