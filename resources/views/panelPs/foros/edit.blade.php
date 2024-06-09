@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content')
<div class="bg-cover w-full flex justify-center items-center">
    <div class="mt-4 w-full h-full bg-white bg-opacity-40 backdrop-filter backdrop-blur-lg rounded-3xl">
        <div class="mt-10 w-12/12 mx-auto rounded-2xl bg-white p-6 bg-opacity-40 backdrop-filter backdrop-blur-lg">
            <h1 class="text-center text-3xl font-semibold">Editar Post</h1>
            <div class="container mx-auto">
                <div class="mt-20 flex justify-center">
                    <div class="w-full max-w-4xl">
                        <div class="bg-cartas shadow-md rounded px-8 pt-6 pb-4 mb-2">
                            <form id="post-form" action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="flex space-x-8">
                                    <div class="w-1/2">
                                        <div class='mb-6'>
                                            <div class="form-group mb-4">
                                                @if($post->imagen)
                                                    <img src="/img/foros/{{$post->imagen}}" class="mt-2 w-full h-auto rounded-lg mb-2">
                                                @endif
                                                <input type="file" name="imagen" class="mt-4 bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/2">
                                        <div class='mb-4'>
                                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                            <input type="text" value="{{ $post->nombre }}" placeholder="Nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                        </div>
                                        <div class='mb-6'>
                                            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción</label>
                                            <textarea name="descripcion" placeholder="Descripción" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="8">{{ $post->descripcion }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" form="post-form" class="bg-sky-600 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Modificar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-36"></div>
        </div>
    </div>
</div>
@stop
