@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action={{route('posts.update', $post)}} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class='form-group'>
                    <label for="nombre">Nombre</label>
                    <input type="text" value="{{$post->nombre}}" placeholder="Nombre" name="nombre">
                    {{-- {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!} --}}
                </div>
                <div class='form-group'>
                    <label for="descripcion">Descripcion</label>
                    <input type="text" value="{{$post->descripcion}}" name="descripcion" placeholder="Descripcion">
                    {{-- {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion']) !!} --}}
                </div>
                <div class='form-group'>
                    <label for="imagen">Imagen</label>
                    <div class="form-group">
                    <img src="/img/foros/{{$post->imagen}}">
                    </div>
                    <input type="file" name="imagen">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop