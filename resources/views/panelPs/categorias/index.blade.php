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
            <table class="table table-striped-columns">
                <tr><th>ID</th> <td>NOMBRE</td> <td>DESCRIPCION</td> <td>ACCION</td></tr>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->nombre}}</td>
                        <td>{{$categoria->descripcion}}</td>                   
                        <td>
                            <a class="btn btn-success" href="{{route('categorias.edit', $categoria->id)}}">Editar</a>
                            <form action="{{route('categorias.destroy', $categoria->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop