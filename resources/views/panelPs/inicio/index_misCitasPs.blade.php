@extends('adminlte::page')
@vite('resources/css/app.css')
@php
    use App\Models\Paciente;
    use App\Models\User;


@endphp
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
            <div >
                <table id="Tablacitas" class="min-w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-contenidocarta">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Fecha</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Hora</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Paciente</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Motivo</th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center"></th>
                            <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach ($citas as $cita)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center">{{$cita->fechaConsulta}}</td>
                                <td class="px-6 py-4 text-center">{{$cita->horaConsulta}}</td>
                                @php
                                   $paciente = Paciente::find($cita->paciente_id);
                                   $user = User::find($paciente->id_user);
                                @endphp
                                <td class="px-6 py-4 text-center">{{$user->first_name}} {{$user->last_name}}</td>
                                <td class="px-6 py-4 text-center">{{$cita->motivo}}</td>
                                <td class="px-6 py-4 text-center">
                                     <div class="flex justify-center gap-4">
                                        <a href="/chat" class="btn btn-primary">
                                            Ir
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <form action="{{route('Citas.destroy', $cita->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="">
                                            <button class="btn btn-danger" type="submit">x</button>
                                        </div>
                                    </form>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css">


@endsection

@section ('js')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script>
        new DataTable('#Tablacitas', {
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copyHtml5',
                    text: '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-file-text-o"></i>',
                    titleAttr: 'CSV'
                },
                {
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'PDF',
                    action: function (e, dt, button, config) {
                        var data = dt.buttons.exportData();
                        var body = [];

                        // Añadir encabezados
                        body.push([
                            { text: 'Fecha', style: 'tableHeader' },
                            { text: 'Hora', style: 'tableHeader' },
                            { text: 'Paciente', style: 'tableHeader' },
                            { text: 'Motivo', style: 'tableHeader' }
                        ]);

                        // Añadir datos
                        data.body.forEach(function (row) {
                            body.push([
                                { text: row[0], style: 'tableBody' },
                                { text: row[1], style: 'tableBody' },
                                { text: row[2], style: 'tableBody' },
                                { text: row[3], style: 'tableBody' }
                            ]);
                        });

                        // Obtener la fecha y hora actual
                        var now = new Date();
                        var date = now.toLocaleDateString();
                        var time = now.toLocaleTimeString();

                        // Definir el documento
                        var docDefinition = {
                            content: [
                                {
                                    image: 'data:image/png;base64,{{ base64_encode(file_get_contents("https://www.dropbox.com/scl/fi/4n4wdkem2wqbem18a2psx/logo.png?rlkey=devzl4gbkqlzc5mwehmvo7d8r&st=93ywi7dl&raw=1")) }}',
                                    width: 150,
                                    height: 50,
                                    alignment: 'center'
                                },
                                {
                                    text: 'Registro de Citas',
                                    fontSize: 16,
                                    bold: true,
                                    alignment: 'center',
                                    margin: [0, 0, 0, 20]
                                },
                                {
                                    table: {
                                        headerRows: 1,
                                        widths: ['*', '*', '*', '*'],
                                        body: body
                                    },
                                    layout: {
                                        hLineWidth: function (i, node) { return 1; },
                                        vLineWidth: function (i, node) { return 1; },
                                        hLineColor: function (i, node) { return 'black'; },
                                        vLineColor: function (i, node) { return 'black'; },
                                        paddingLeft: function (i, node) { return 4; },
                                        paddingRight: function (i, node) { return 4; },
                                        paddingTop: function (i, node) { return 2; },
                                        paddingBottom: function (i, node) { return 2; },
                                        fillColor: function (rowIndex, node, columnIndex) { return null; }
                                    }
                                }
                            ],
                            styles: {
                                tableHeader: {
                                    fillColor: '#f2f2f2',
                                    color: '#333',
                                    alignment: 'center',
                                    bold: true
                                },
                                tableBody: {
                                    alignment: 'center',
                                    fontSize: 10
                                }
                            },
                            header: {
                                columns: [
                                    { text: 'Fecha: ' + date + ' Hora: ' + time, alignment: 'right', margin: [0, 10, 20, 0], fontSize: 10 }
                                ]
                            },
                            footer: function (currentPage, pageCount) {
                                return {
                                    columns: [
                                        {
                                            text: 'Página ' + currentPage.toString() + ' de ' + pageCount,
                                            alignment: 'center',
                                            fontSize: 10,
                                            margin: [0, 0, 0, 10]
                                        }
                                    ]
                                };
                            }
                        };

                        // Abrir el PDF en una nueva ventana
                        pdfMake.createPdf(docDefinition).open();
                    }
                }
            ]
        });
    </script>
@endsection

