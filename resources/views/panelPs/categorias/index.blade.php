@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1>Lista de Categorias</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('categorias.create')}}"> Crear</a>
            <table>
                <tr><th>ID</th> <td>NOMBRE</td> <td>ACCION</td></tr>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->Nombre}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('categorias.edit', $categoria->id)}}">Editar</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['categorias.destroy', $categorias->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar', ['class'=>'btn btn-success']) !!}
                                {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop