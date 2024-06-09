@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12">
            <h2 class="text-center text-3xl font-bold my-4">{{$post->nombre}}</h2>
            @if($post->imagen)
                <div class="flex justify-center mb-4">
                    <img src="/img/foros/{{$post->imagen}}" class="max-w-full h-auto rounded">
                </div>
            @endif
            @include('comentarios.lista', ['lista' => $post->comentarios])
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
