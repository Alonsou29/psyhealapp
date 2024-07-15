@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content')

<!-- Función para obtener el nivel según el valor y tipo -->
@php
function getNivel($valor, $tipo) {
    $niveles = [
        'depresion' => [
            'Presenta un nivel Normal' => [0, 9],
            'Presenta un nivel Leve' => [10, 13],
            'Presenta un nivel Moderado' => [14, 20],
            'Presenta un nivel Grave' => [21, 27],
            'Usted presenta un nivel Extremadamente grave!' => [28, PHP_INT_MAX]
        ],
        'ansiedad' => [
            'Presenta un nivel Normal' => [0, 7],
            'Presenta un nivel Leve' => [8, 9],
            'Presenta un nivel Moderado' => [10, 14],
            'Presenta un nivel Grave' => [15, 19],
            'Usted presenta un nivel Extremadamente grave!' => [20, PHP_INT_MAX]
        ],
        'estres' => [
            'Presenta un nivel Normal' => [0, 14],
            'Presenta un nivel Leve' => [15, 18],
            'Presenta un nivel Moderado' => [19, 25],
            'Presenta un nivel Grave' => [26, 33],
            'Usted presenta un nivel Extremadamente grave!' => [34, PHP_INT_MAX]
        ]
    ];

    foreach ($niveles[$tipo] as $nivel => $rango) {
        if ($valor >= $rango[0] && $valor <= $rango[1]) {
            return $nivel;
        }
    }

    return 'Desconocido';
}
@endphp

<!-- Componente de detalle del paciente -->
<div class="flex flex-col lg:flex-row justify-center lg:items-start">
  <div class="bg-gray-100 lg:mr-5">
    <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
      <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('storage/' . $userPaciente->profile_photo_path) }}" alt="Foto de perfil">
      <h2 class="text-center text-2xl font-semibold mt-3">{{ $userPaciente->first_name }} {{ $userPaciente->last_name }}</h2>
      <div class="mt-5">
        <h3 class="text-xl font-semibold mb-2">Biografía:</h3>
        <p class="text-gray-600 mt-2 text-justify">{{ $userPaciente->Biografia }}</p>
      </div>
    </div>
  </div>

  <div class="bg-white shadow-md rounded-lg lg:w-[700px] max-w-[95%] mx-auto mt-5 p-3 lg:p-5">
    <div class="mb-8 w-full">
      <h4 class="px-2 text-xl font-bold text-navy-700 text-black">Información General</h4>
    </div>
    <div class="grid grid-cols-2 gap-4 px-2">
      <div class="flex flex-col items-start justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
        <p class="text-sm text-gray-600">Teléfono</p>
        <p class="text-base font-bold text-navy-700 dark:text-white">{{ $userPaciente->telefono }}</p>
      </div>

      <div class="flex flex-col justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
        <p class="text-sm text-gray-600">Email</p>
        <p class="text-base font-bold text-navy-700 dark:text-white">{{ $userPaciente->email }}</p>
      </div>

      <div class="flex flex-col items-start justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
        <p class="text-sm text-gray-600">Fecha Nacimiento</p>
        <p class="text-base font-bold text-navy-700 dark:text-white">{{ $userPaciente->birthdate }}</p>
      </div>

      <div class="flex flex-col justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
        <p class="text-sm text-gray-600">Diagnóstico</p>
        <p class="text-base font-bold text-navy-700 dark:text-white">{{ $diagnostico }}</p>
      </div>
    </div>
  </div>
</div>

<!-- Resultados del Test DASS-21 -->
@if(isset($dassResult))


<div class="">
  <div class="mb-8 w-full">
    <h4 class="text-center px-2 text-xl font-bold text-navy-700 text-black">Resultados del Test DASS-21</h4>
  </div>
  <div class="text-center">
    <div class=" justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">

    <div class="text-center mt-8">
        <p><strong>Ansiedad:</strong> {{ $dassResult->ansiedad }} - {{ getNivel($dassResult->ansiedad, 'ansiedad') }}</p>
        <p><strong>Depresión:</strong> {{ $dassResult->depresion }} - {{ getNivel($dassResult->depresion, 'depresion') }}</p>
        <p><strong>Estrés:</strong> {{ $dassResult->estres }} - {{ getNivel($dassResult->estres, 'estres') }}</p>

    </div>
  </div>

  <div class="mt-20">


<div class="chart-container">
    <div class="bar" style="height: {{ $dassResult->ansiedad * 10 }}px;" title="Ansiedad: {{ $dassResult->ansiedad }}">
        <span><strong>Ansiedad</strong></span>
    </div>
    <div class="bar" style="height: {{ $dassResult->depresion * 10 }}px;" title="Depresión: {{ $dassResult->depresion }}">
        <span><strong>Depresión</strong></span>
    </div>
    <div class="bar" style="height: {{ $dassResult->estres * 10 }}px;" title="Estrés: {{ $dassResult->estres }}">
        <span><strong>Estrés</strong></span>
    </div>
</div>
</div>

@endif

<style>
            .chart-container {
                display: flex;
                justify-content: space-around;
                align-items: flex-end;
                height: 450px;
                margin-top: 10px;
                border: 1px solid #ccc;
                padding: 20px;
                box-sizing: border-box;
                background-color: #fff; /* Fondo blanco */
            }

            .bar {
                width: 30px;
                background-color: #C4FB19;
                text-align: center;
                color: white;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                align-items: center;
                font-size: 14px;
                border-radius: 5px;
                position: relative;
            }

            .bar span {
                position: absolute;
                bottom: -20px;
                color: black;
                background-color: #fff; /* Fondo blanco para el texto */
                padding: 2px 5px;
                border-radius: 3px;
            }

            .bar:nth-child(2) {
                background-color: #2196F3;
            }

            .bar:nth-child(3) {
                background-color: #ea899a;
            }
</style>

@stop