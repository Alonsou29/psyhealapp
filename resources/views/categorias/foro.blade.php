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
            <div class="text-center mt-2">
                <div class="bg-gray-800 text-white rounded-full inline-block p-2">
                    <p>{{$post->descripcion}}</p>
                </div>
            </div>
            @if($post->imagen)
                <div class="flex justify-center mb-4">
                    <img src="/img/foros/{{$post->imagen}}" class="max-w-full h-auto rounded">
                </div>
            @endif
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
