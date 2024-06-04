@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {!! Form::open(['route'=>'categorias.store','method'=>'POST']) !!}
                <div class='form-group'>
                    {!! Form::label('nombre', 'Nombre')!!}
                    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('descripcion', 'Descripcion')!!}
                    {!! Form::textarea('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Crear', ['class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop