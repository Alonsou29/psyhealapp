@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1 class=" text-3xl font-semibold">Lista de Categorias</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7"> <!-- Reducir el ancho de la columna -->
            <div class="max-w-2xl"> <!-- Establecer el ancho máximo -->
                <table id="categoria" class="min-w-full table-auto border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-contenidocarta">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Nombre</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Ver</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @forelse ($categorias as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 ">{{$item->nombre}}</td>
                                <td class="px-6 py-4 text-center"> <!-- Centrar el ícono del ojo -->
                                    <a href="/categorias/{{$item->id}}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="px-6 py-4 text-center">No hay categorías disponibles</td>
                            </tr>
                        @endforelse
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


@endsection

@section ('js')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

    
    <script>
        $('#categoria').DataTable( {
            responsive: true
        } );

    </script>

@endsection