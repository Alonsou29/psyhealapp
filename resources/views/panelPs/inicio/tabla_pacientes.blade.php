@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content_header')
    <h1>Tabla Pacientes</h1>
@stop

@section('content')

<div >
  <table id="Tablapacientes" class="min-w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-contenidocarta">
      <tr>
        <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Nombre</th>
        <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center ">Teléfono</th>
        <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Género</th>
        <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center">Diagnóstico</th>
        <th scope="col" class="px-6 py-4 text-base font-bold text-gray-900 text-center"></th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      <tr class="hover:bg-gray-50">
        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900 text-center items-center">
          <div class="relative h-10 w-10 flex-shrink-0">
            <img
              class="h-full w-full rounded-full object-cover object-center"
              src="https://www.dropbox.com/scl/fi/5646yw6awekge8w10a2jj/photo_2024-04-16_13-51-43-copia.jpg?rlkey=k66lqex30c8mzqo897hdc76sy&st=8m5gwigw&raw=1"
              alt=""
            />
            <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
          </div>
          <div class="text-sm sm:text-xs">
            <div class="font-medium text-gray-700">Rubielena López</div>
          </div>
        </th>
        <td class="px-6 py-4 text-center sm:px-4 sm:py-2 ">0412-0533144</td>
        <td class="px-6 py-4 text-center sm:px-4 sm:py-2 ">Femenino</td>
        <td class="px-6 py-4 text-center sm:px-4 sm:py-2">
          <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600 sm:text-xs sm:px-1 sm:py-0.5">
            Ansiedad
          </span>
        </td>
        <td class="px-6 py-4 sm:px-4 sm:py-2">
                    <div class="flex justify-center gap-4">
                        <a x-data="{ tooltip: 'Delete' }" href="#">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                fill="none" 
                                viewBox="0 0 24 24" 
                                stroke-width="1.5" 
                                stroke="currentColor" 
                                class="h-6 w-6 sm:h-5 sm:w-5" 
                                x-tooltip="tooltip"
                            >
                                <path 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" 
                                />
                            </svg>
                        </a>
                        <a x-data="{ tooltip: 'Ver' }" href="{{ route('verPacientes') }}">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                fill="none" 
                                viewBox="0 0 24 24" 
                                stroke-width="1.5" 
                                stroke="currentColor" 
                                class="h-6 w-6 sm:h-5 sm:w-5" 
                                x-tooltip="tooltip"
                            >
                                <path 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" 
                                />
                                <path 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-.274 1.003-.692 1.947-1.25 2.8-1.497 2.23-3.85 3.7-6.292 3.7-2.441 0-4.794-1.47-6.292-3.7A10.434 10.434 0 012.458 12z" 
                                />
                            </svg>
                        </a>
                    </div>
                </td>
      </tr>
    </tbody>
  </table>
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
    new DataTable('#Tablapacientes', {
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
                        { text: 'Nombre', style: 'tableHeader' },
                        { text: 'Email', style: 'tableHeader' },
                        { text: 'Teléfono', style: 'tableHeader' },
                        { text: 'Género', style: 'tableHeader' },
                        { text: 'Diagnóstico', style: 'tableHeader' }
                    ]);

                    // Añadir datos
                    data.body.forEach(function (row) {
                        body.push([
                            { text: row[0], style: 'tableBody' },
                            { text: 'ejemplo@correo.com', style: 'tableBody' }, // Sustituye con el email real si lo tienes
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
                                text: 'Registro de Pacientes',
                                fontSize: 16,
                                bold: true,
                                alignment: 'center',
                                margin: [0, 0, 0, 20]
                            },
                            {
                                table: {
                                    headerRows: 1,
                                    widths: ['*', '*', '*', '*', '*'],
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

