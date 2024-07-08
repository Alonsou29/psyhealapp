@extends('layouts.navbar')
@vite('resources/css/app.css')

<div class="bg-gradiente mt-20 font-[sans-serif] p rounded-3xl">
    <div class="container mx-auto flex flex-col justify-center items-center">
        <h3 class="text-white text-3xl font-bold mb-4">Test DASS-21</h3>
    </div>
</div>
<div class="container">
    <div class="mt-8">
        <div class="relative isolate px-6  lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

        <div class="max-w-3xl mx-auto mt-8 space-y-4">
            <form id="formTestDass" method="POST" action="{{ route('guardar-resultados') }}">
                @csrf
                @foreach ($preguntas as $index => $pregunta)
                <div id="pregunta{{ $index + 1 }}" class="pregunta transition-all duration-200 bg-white border border-gray-200 shadow-lg p-4 {{ $index > 0 ? 'hidden' : '' }}">
                    <p class="text-lg font-semibold">{{ $index + 1 }}. {{ $pregunta }}</p>
                    <div class="mt-4 space-y-4">
                        <label class="block bg-gray-100 p-2 rounded-lg hover:bg-gray-200">
                            <input type="radio" name="respuestas[{{ $index + 1 }}]" value="0" class="mr-2">
                            No me aplicó
                        </label>
                        <label class="block bg-gray-100 p-2 rounded-lg hover:bg-gray-200">
                            <input type="radio" name="respuestas[{{ $index + 1 }}]" value="1" class="mr-2">
                            Me aplicó un poco, o durante parte del tiempo
                        </label>
                        <label class="block bg-gray-100 p-2 rounded-lg hover:bg-gray-200">
                            <input type="radio" name="respuestas[{{ $index + 1 }}]" value="2" class="mr-2">
                            Me aplicó bastante, o durante una buena parte del tiempo
                        </label>
                        <label class="block bg-gray-100 p-2 rounded-lg hover:bg-gray-200">
                            <input type="radio" name="respuestas[{{ $index + 1 }}]}" value="3" class="mr-2">
                            Me aplicó mucho, o la mayor parte del tiempo
                        </label>
                    </div>
                    <div class="mt-8 flex justify-between">
                        @if ($index > 0)
                        <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded focus:outline-none prev-question" data-prev="{{ $index }}">
                            Anterior
                        </button>
                        @else
                        <div></div>
                        @endif
                        @if ($index < 20)
                        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded focus:outline-none next-question" data-next="{{ $index + 2 }}">
                            Siguiente
                        </button>
                        @else
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded focus:outline-none">
                            Enviar respuestas
                        </button>
                        @endif
                    </div>
                </div>
                @endforeach
            </form>
        </div>

        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(30%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
</div>

<style>
        .container {
    max-width: 900px;
    margin: auto;
    padding: 20px;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nextButtons = document.querySelectorAll('.next-question');
        const prevButtons = document.querySelectorAll('.prev-question');

        nextButtons.forEach(button => {
            button.addEventListener('click', function () {
                const nextPreguntaId = this.getAttribute('data-next');
                const currentPregunta = this.closest('.pregunta');
                const nextPregunta = document.getElementById('pregunta' + nextPreguntaId);

                if (nextPregunta) {
                    currentPregunta.classList.add('hidden');
                    nextPregunta.classList.remove('hidden');
                }
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener('click', function () {
                const prevPreguntaId = this.getAttribute('data-prev');
                const currentPregunta = this.closest('.pregunta');
                const prevPregunta = document.getElementById('pregunta' + prevPreguntaId);

                if (prevPregunta) {
                    currentPregunta.classList.add('hidden');
                    prevPregunta.classList.remove('hidden');
                }
            });
        });
    });
</script>
