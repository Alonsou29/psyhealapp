@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1 class=" text-3xl font-semibold">Lista de Foros</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2 class="">{{$categoria->nombre}}</h2>
            <div class="max-w-2xl mx-auto">
                <table class="min-w-full table-auto border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-contenidocarta">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Imagen</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Nombre</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Ver</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @forelse ($categoria->posts as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center">
                                    @if($item->imagen)
                                        <img src="/img/foros/{{$item->imagen}}" class="img-fluid mx-auto" width="200" height="100">
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-center">{{$item->nombre}}</td>
                                <td class="px-6 py-4 text-center">
                                    <a href="/categorias/{{$categoria->id}}/{{$item->id}}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-4 text-center">No se han publicado posts</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
