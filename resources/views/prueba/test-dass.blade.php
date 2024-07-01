<!-- resources/views/test_dass.blade.php -->

@extends('layouts.navbar')   
@vite('resources/css/app.css')

<div class="mt-36">

<div class="relative isolate px-6  lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    
    <div class="max-w-3xl mx-auto mt-8 space-y-4">
    <h2 class="text-2xl font-bold">Test DASS-21</h2>

    <form id="formTestDass" method="POST" action="{{ route('guardar-resultados') }}">
        @csrf
        <div id="pregunta1" class="transition-all duration-200 bg-white border border-gray-200 shadow-lg p-4">
            <p class="text-lg font-semibold">1. Me costó mucho relajarme</p>
            <div class="mt-4">
                <label class="inline-flex items-center">
                    <input type="radio" name="respuestas[1]" value="0" data-next="pregunta2" class="mr-2">
                    No me aplicó
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="respuestas[1]" value="1" data-next="pregunta2" class="mr-2">
                    Me aplicó un poco, o durante parte del tiempo
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="respuestas[1]" value="2" data-next="pregunta2" class="mr-2">
                    Me aplicó bastante, o durante una buena parte del tiempo
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="respuestas[1]" value="3" data-next="pregunta2" class="mr-2">
                    Me aplicó mucho, o la mayor parte del tiempo
                </label>
            </div>
        </div>
        
        <!-- Agregar las demás preguntas de manera similar -->
        @for ($i = 2; $i <= 21; $i++)
        <div id="pregunta{{ $i }}" class="transition-all duration-200 bg-white border border-gray-200 shadow-lg p-4" style="display: none;">
                <p class="text-lg font-semibold">{{ $i }}. {{ $preguntas[$i - 1] }}</p>
                <div class="mt-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="respuestas[{{ $i }}]" value="0" data-next="pregunta{{ $i + 1 }}" class="mr-2">
                        No me aplicó
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="respuestas[{{ $i }}]" value="1" data-next="pregunta{{ $i + 1 }}" class="mr-2">
                        Me aplicó un poco, o durante parte del tiempo
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="respuestas[{{ $i }}]" value="2" data-next="pregunta{{ $i + 1 }}" class="mr-2">
                        Me aplicó bastante, o durante una buena parte del tiempo
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="respuestas[{{ $i }}]" value="3" data-next="pregunta{{ $i + 1 }}" class="mr-2">
                        Me aplicó mucho, o la mayor parte del tiempo
                    </label>
                </div>
            </div>
            @endfor
            
            <div class="mt-8">
                <button type="submit" id="btnEnviar" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded focus:outline-none">
                    Enviar respuestas
                </button>
            </div>
        </form>
    </div>

    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(30%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>
</div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('formTestDass');
        const preguntas = document.querySelectorAll('[id^="pregunta"]');

        form.addEventListener('submit', function (event) {
            let allAnswered = true;

            preguntas.forEach(pregunta => {
                const radios = pregunta.querySelectorAll('input[type="radio"]');
                const seleccionado = Array.from(radios).find(radio => radio.checked);

                if (!seleccionado) {
                    allAnswered = false;
                    pregunta.style.border = '1px solid red';
                } else {
                    pregunta.style.border = '';
                }
            });

            if (!allAnswered) {
                event.preventDefault();
                alert('Por favor, responda todas las preguntas.');
            }
        });

        preguntas.forEach(pregunta => {
            const radios = pregunta.querySelectorAll('input[type="radio"]');
            radios.forEach(radio => {
                radio.addEventListener('change', function () {
                    const nextPreguntaId = this.dataset.next;
                    if (nextPreguntaId) {
                        pregunta.style.display = 'none';
                        document.getElementById(nextPreguntaId).style.display = 'block';
                    }
                });
            });
        });
    });
</script>

