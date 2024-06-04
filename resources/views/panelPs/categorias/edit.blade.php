@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action={{route('categorias.update', $categoria)}} method="POST">
                @csrf
                @method('PUT')
                <div class='form-group'>
                    <label for="nombre">Nombre</label>
                    <input type="text" value="{{$categoria->nombre}}" placeholder="Nombre" name="nombre">
                    {{-- {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!} --}}
                </div>
                <div class='form-group'>
                    <label for="descripcion">Descripcion</label>
                    <input type="text" value="{{$categoria->descripcion}}" name="descripcion" placeholder="Descripcion">
                    {{-- {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion']) !!} --}}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">modificar</button>
                    {{-- {!! Form::submit('Crear', ['class'=>'btn btn-primary']) !!} --}}
                </div>
            </form>
        </div>
    </div>
</div>
@stop