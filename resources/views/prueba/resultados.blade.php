@extends('layouts.navbar')   
@vite('resources/css/app.css')

<div class="bg-gradiente mt-20 font-[sans-serif] p rounded-3xl">
    <div class="container mx-auto flex flex-col justify-center items-center">
        <h3 class="text-white text-3xl font-bold mb-4"> Resultados del Test DASS-21</h3>
    </div>
</div>
<div class="container">
    <div class="mt-8">
        <div class="relative isolate px-6  lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
    <div class="card">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="card">
                <div class="flex items-center justify-between">
                    <div class="text-blue-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 00-7.071 17.071l7.071-7.07 7.071 7.07A10 10 0 0012 2z"></path>
                        </svg>
                    </div>
                    <div class="text-gray-600 text-sm">{{ $resultados->depresion }} / 42</div>
                </div>
                <h3 class="text-xl font-bold mt-4">Depresión</h3>
                <p>{{ getNivel($resultados->depresion, 'depresion') }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700 mt-4">
                    <div class="bg-blue-500 h-4 rounded-full" style="width: {{ porcentaje($resultados->depresion, 42) }}%"></div>
                </div>
            </div>

            <div class="card">
                <div class="flex items-center justify-between">
                    <div class="text-yellow-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="text-gray-600 text-sm">{{ $resultados->ansiedad }} / 42</div>
                </div>
                <h3 class="text-xl font-bold mt-4">Ansiedad</h3>
                <p>{{ getNivel($resultados->ansiedad, 'ansiedad') }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700 mt-4">
                    <div class="bg-yellow-500 h-4 rounded-full" style="width: {{ porcentaje($resultados->ansiedad, 42) }}%"></div>
                </div>
            </div>

            <div class="card">
                <div class="flex items-center justify-between">
                    <div class="text-pink-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="text-gray-600 text-sm">{{ $resultados->estres }} / 42</div>
                </div>
                <h3 class="text-xl font-bold mt-4">Estrés</h3>
                <p>{{ getNivel($resultados->estres, 'estres') }}</p>
                <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700 mt-4">
                    <div class="bg-pink-500 h-4 rounded-full" style="width: {{ porcentaje($resultados->estres, 42) }}%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-8 flex justify-center">
        <a href="{{ route('test-dass') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Volver a hacer la prueba</a>
    </div>
</div>

<style>
    .container {
    max-width: 900px;
    margin: auto;
    padding: 20px;
}

.card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    padding: 20px;
}

.card h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.card p {
    font-size: 18px;
    line-height: 1.6;
}

.radio-group {
    display: flex;
    flex-direction: column;
}

.radio-group label {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 10px;
    padding: 10px;
    transition: background 0.2s;
}

.radio-group input[type="radio"] {
    margin-right: 10px;
}

.radio-group label:hover {
    background: #f1f1f1;
}

.btn {
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.2s;
}

.btn:hover {
    background-color: #0056b3;
}

.alert {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 20px;
}




</style>

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

function porcentaje($valor, $total) {
    return ($valor / $total) * 100;
}
@endphp
