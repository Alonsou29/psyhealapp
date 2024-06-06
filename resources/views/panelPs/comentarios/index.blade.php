@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1>Lista de comentarios</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <a href="{{route('categorias.create')}}"> Crear</a> --}}
            <table class="table table-striped-columns">
                <tr><th>ID</th> <td>NOMBRE</td> <td>DESCRIPCION</td> <td>ACCION</td></tr>
                @foreach ($comentarios as $comentario)
                    <tr>
                        <td>{{$comentario->id}}</td>
                        <td>{{$comentario->descripcion}}</td>               
                        <td>
                            <a class="btn btn-success" href="{{route('comentarios.edit', $comentario->id)}}">Editar</a>
                            {{-- <a class="btn btn-success" href="{{route('categorias.show', $categoria->id)}}">Ver</a> --}}
                            <form action="{{route('comentarios.destroy', $comentario->id)}}" method="POST">
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