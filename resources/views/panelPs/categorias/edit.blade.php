@extends('adminlte::page')
@vite('resources/css/app.css')




@section('content')
<div class="bg-cover w-full flex justify-center items-center">
    <div class="mt-4 w-full h-full bg-white bg-opacity-40 backdrop-filter backdrop-blur-lg rounded-3xl">
        <div class="mt-10 w-12/12 mx-auto rounded-2xl bg-white p-1 bg-opacity-40 backdrop-filter backdrop-blur-lg">
            <h1 class="text-center text-3xl font-semibold">Editar Categoría</h1>
            <div class="container mx-auto">
                <div class="mt-20 flex justify-center">
                    <div class="w-full max-w-md">
                        <form action="{{route('categorias.update', $categoria)}}" method="POST" class="bg-cartas shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            @csrf
                            @method('PUT')
                            <div class='mb-4'>
                                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                <input type="text" value="{{$categoria->nombre}}" placeholder="Nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class='mb-6'>
                                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción</label>
                                <textarea name="descripcion" placeholder="Descripción" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >{{$categoria->descripcion}}</textarea>
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-sky-600 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Modificar</button>
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
