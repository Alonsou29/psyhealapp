@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class='form-group'>
                    <label for="nombre">Nombre</label>
                    <input type="text" placeholder="Nombre" name="nombre">
                    {{-- {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!} --}}
                </div>
                <div class='form-group'>
                    <label for="descripcion">Descripcion</label>
                    <textarea rows="5" cols="30" style="resize: none" name="descripcion" placeholder="Descripcion"></textarea>
                    {{-- {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion']) !!} --}}
                </div>
                <div class='form-group'>
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" >
                    {{-- {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion']) !!} --}}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">crear</button>
                    {{-- {!! Form::submit('Crear', ['class'=>'btn btn-primary']) !!} --}}
                </div>
            </form>
        </div>
    </div>
</div>
@stop