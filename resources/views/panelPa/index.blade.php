@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1>Panel Pacientes</h1>
@stop

@section('content')

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

        $user = auth()->user();
        $resultados = \App\Models\DassResult::where('user_id', $user->id)->latest()->first();
    @endphp

    @if ($resultados)
        @php
            $nivelAnsiedad = getNivel($resultados->ansiedad, 'ansiedad');
            $nivelDepresion = getNivel($resultados->depresion, 'depresion');
            $nivelEstres = getNivel($resultados->estres, 'estres');
        @endphp
    <div>

        <div class="bg-gradiente font-[sans-serif]  rounded-2xl">
             <div class="container mx-auto flex flex-col justify-center items-center">
                 <h3 class="text-white text-3xl font-bold m-2"> Resultados del Test DASS-21</h3>
            </div>

    </div>

    <div class="text-center mt-8">
        <p><strong>Ansiedad:</strong> {{ $resultados->ansiedad }} - {{ $nivelAnsiedad }}</p>
        <p><strong>Depresión:</strong> {{ $resultados->depresion }} - {{ $nivelDepresion }}</p>
        <p><strong>Estrés:</strong> {{ $resultados->estres }} - {{ $nivelEstres }}</p>

    </div>


        <div class="mt-20">


            <div class="chart-container">
                <div class="bar" style="height: {{ $resultados->ansiedad * 10 }}px;" title="Ansiedad: {{ $resultados->ansiedad }}">
                    <span><strong>Ansiedad</strong></span>
                </div>
                <div class="bar" style="height: {{ $resultados->depresion * 10 }}px;" title="Depresión: {{ $resultados->depresion }}">
                    <span><strong>Depresión</strong></span>
                </div>
                <div class="bar" style="height: {{ $resultados->estres * 10 }}px;" title="Estrés: {{ $resultados->estres }}">
                    <span><strong>Estrés</strong></span>
                </div>
            </div>
        </div>


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
    @else

        <div class="container">
  <div class="container">
    <div class="bg-gradiente mt-10 font-[sans-serif] p-6 rounded-3xl">
    <div class="text-white container mx-auto flex flex-col justify-center items-center">
    <h2>No hay resultados disponibles.</h2>
    <p>Realiza el Test Dass-21 y observa tus niveles de Ansiedad, Depresión y Estrés</p>
    </div>
</div>

<div class="mt-4">
    <a href="{{ route('test-dass') }}" class="px-5 py-2 me-2 text-xs font-medium text-white bg-fondo rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Inicia el Test Dass-21</a>

</div>
    @endif
@stop
