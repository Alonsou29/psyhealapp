@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1>Lista de comentarios</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
                <table class="min-w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-contenidocarta">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">ID</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Descripción</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach ($comentarios as $comentario)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center">{{$comentario->id}}</td>
                                <td class="px-6 py-4 text-center">{{$comentario->descripcion}}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-4">
                                        <a href="{{route('comentarios.edit', $comentario->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        {{-- <a class="btn btn-success" href="{{route('categorias.show', $categoria->id)}}">Ver</a> --}}
                                        <form action="{{route('comentarios.destroy', $comentario->id)}}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
