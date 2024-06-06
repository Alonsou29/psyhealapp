@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content_header')
    <h1>Editar Comentario</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action={{route('comentarios.update', $comentario)}} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class='form-group'>
                    <label for="estado">Estado</label>
                    <input type="checkbox"  value="{{$comentario->estado}}"  checked="null" name="estado">
                    {{-- {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!} --}}
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