@extends('adminlte::page')
@vite('resources/css/app.css')

@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content')
<div class="mt-4">


    <div class="container bg-gradiente py-2 rounded-3xl">
        <h1 class="text-center text-white text-3xl font-bold mb-4">{{$post->nombre}}</h1>
    </div>
</div>
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12">

            @if($post->imagen)
                <div class="flex justify-center mt-2 mb-2">
                    <img src="/img/foros/{{$post->imagen}}" class="tamaño_imagen_foro">
                </div>
            @endif
            <div class="text-center mt-2">
                <div class="bg-gray-800 text-white rounded-full inline-block p-2">
                    <p>{{$post->descripcion}}</p>
                </div>
            </div>
            @include('comentarios.lista', ['lista' => $post->comentarios])
            @include('comentarios.formulario')
        </div>
    </div>
</div>


<script>
    function toggleForm(id) {
        var element = document.getElementById(id);
        if (element.classList.contains('hidden')) {
            element.classList.remove('hidden');
        } else {
            element.classList.add('hidden');
        }
    }
</script>

@stop
