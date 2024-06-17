@extends('adminlte::page')
@vite('resources/css/app.css')

<head>
    <!-- Otras etiquetas del head -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

@section('content_header')
    <h1>Lista de Citas</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <table class="min-w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-contenidocarta">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Fecha</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Hora</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Psicólogo</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center">17/06/2024</td>
                                <td class="px-6 py-4 text-center">1:35 am</td>
                                <td class="px-6 py-4 text-center">Nelvida Navarro</td>                   
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-4">
                                        <a href="#" class="btn btn-primary">
                                            Ir
                                        </a>
                                    </div>
                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
