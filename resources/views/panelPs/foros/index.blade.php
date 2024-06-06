@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1>Lista de Foros</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('posts.create')}}"> Crear</a>
            <table class="table table-striped-columns">
                <tr><th>ID</th> <td>NOMBRE</td> <td>DESCRIPCION</td> <td>ACCION</td></tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->nombre}}</td>
                        <td>{{$post->descripcion}}</td>                   
                        <td>
                            <a class="btn btn-success" href="{{route('posts.edit', $post->id)}}">Editar</a>
                            {{-- <a class="btn btn-success" href="{{route('categorias.show', $post->id)}}">Ver</a> --}}
                            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
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