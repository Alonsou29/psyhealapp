@extends('layouts.navbar')
@vite('resources/css/app.css')

<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="py-24 sm:py-36 lg:py-28">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <img src="https://www.ensalza.com/blog/wp-content/uploads/Diseno-web-psicologos-1024x612.jpg" alt="" class="w-full h-48 object-cover object-center rounded">
                </div>
                <h2 class="text-lg font-bold mb-2">Nombre: Alejandra Mendoza</h2>
                <p class="text-gray-700 mb-2">Cédula: 13876369 </p>
                <p class="text-gray-700 mb-4">Enfoque: Ansiedad</p>
            </div>
            <div class="col-span-2 bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">Programar Cita</h3>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="fecha" class="block text-sm font-medium text-gray-700 mb-2">Fecha:</label>
                        <input type="date" id="fecha" name="fecha" class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md py-2 px-3">
                    </div>
                    <div class="mb-4">
                        <label for="hora" class="block text-sm font-medium text-gray-700 mb-2">Hora:</label>
                        <input type="time" id="hora" name="hora" class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md py-2 px-3">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-200">Agendar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(30%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>