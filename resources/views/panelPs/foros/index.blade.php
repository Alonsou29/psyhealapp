@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1 class=" text-3xl font-semibold">Lista de Foros</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-8 mt-2">
                <a href="{{route('posts.create')}}" class="bg-sky-600 hover:bg-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-8 ">Crear</a>
            </div>
            <div >
                <table id="Tablaforos" class="min-w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-contenidocarta">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">ID</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Nombre</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Descripción</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach ($posts as $post)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center">{{$post->id}}</td>
                                <td class="px-6 py-4 text-center">{{$post->nombre}}</td>
                                <td class="px-6 py-4 text-center">{{$post->descripcion}}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-4">
                                        <a href="{{route('posts.edit', $post->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{route('posts.show', $post->id)}}">
                                            <i class="fas fa-eye"></i>
                                        </a> 
                                        <form action="{{route('posts.destroy', $post->id)}}" method="POST" class="inline">
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

@section ('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css">

@endsection

@section ('js')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap5.js"></script>

    <script>
        new DataTable('#Tablaforos', {
            responsive: true
        });

    </script>

@endsection
