@extends('layouts.navbar')   
@vite('resources/css/app.css')

<div class="mt-36">

    <div class="relative isolate px-6  lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="max-w-4xl mx-auto mt-8">
    <h2 class="text-3xl font-bold">Prueba de depresión, ansiedad, estrés Escala DASS-21</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

        <div class="bg-white border border-gray-200 shadow-lg p-4 rounded-lg">
            <div class="flex items-center justify-between">
                <div class="text-blue-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 00-7.071 17.071l7.071-7.07 7.071 7.07A10 10 0 0012 2z"></path>
                    </svg>
                </div>
                <div class="text-gray-600 text-sm">{{ $resultados->depresion }} / 42</div>
            </div>
            <h3 class="text-xl font-bold mt-4">Depresión</h3>
            <p>{{ $resultados->depresion < 10 ? 'No muestra signos de depresión' : 'Muestra signos de depresión' }}</p>
            <a href="#" class="text-blue-500 mt-4 inline-block">Learn more &rarr;</a>
        </div>

        <div class="bg-white border border-gray-200 shadow-lg p-4 rounded-lg">
            <div class="flex items-center justify-between">
                <div class="text-yellow-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="text-gray-600 text-sm">{{ $resultados->ansiedad }} / 42</div>
            </div>
            <h3 class="text-xl font-bold mt-4">Ansiedad</h3>
            <p>{{ $resultados->ansiedad < 8 ? 'No muestra signos de ansiedad' : 'Muestra signos de ansiedad' }}</p>
            <a href="#" class="text-blue-500 mt-4 inline-block">Learn more &rarr;</a>
        </div>

        <div class="bg-white border border-gray-200 shadow-lg p-4 rounded-lg">
            <div class="flex items-center justify-between">
                <div class="text-pink-500">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="text-gray-600 text-sm">{{ $resultados->estres }} / 42</div>
            </div>
            <h3 class="text-xl font-bold mt-4">Estrés</h3>
            <p>{{ $resultados->estres < 15 ? 'No muestra signos de estrés' : 'Muestra signos de estrés' }}</p>
            <a href="#" class="text-blue-500 mt-4 inline-block">Learn more &rarr;</a>
        </div>

    </div>
    <div class="mt-8">
        <a href="{{ route('test-dass') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded focus:outline-none">Reinicia la prueba</a>
    </div>
</div>

<div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(30%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>

</div>
