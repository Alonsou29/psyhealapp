@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1>Tabla psicólogo</h1>
@stop

@section('content')
<!-- component -->
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
  <table class="min-w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-contenidocarta">
      <tr>
        <th scope="col" class="px-6 py-4 font-bold text-gray-900 text-center">Nombre</th>
        <th scope="col" class="px-6 py-4 font-bold text-gray-900 text-center hidden md:table-cell">Telefono</th>
        <th scope="col" class="px-6 py-4 font-bold text-gray-900 text-center hidden lg:table-cell">Género</th>
        <th scope="col" class="px-6 py-4 font-bold text-gray-900 text-center">Especialidad</th>
        <th scope="col" class="px-6 py-4 font-bold text-gray-900 text-center"></th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      <tr class="hover:bg-gray-50">
        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900 text-center items-center">
          <div class="relative h-10 w-10 flex-shrink-0">
            <img
              class="h-full w-full rounded-full object-cover object-center"
              src="https://www.ensalza.com/blog/wp-content/uploads/Diseno-web-psicologos-1024x612.jpg"
              alt=""
            />
            <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
          </div>
          <div class="text-sm sm:text-xs">
            <div class="font-medium text-gray-700">Alejandra Mendoza</div>
            <div class="text-gray-400">alejaM@gmail.com</div>
          </div>
        </th>
        <td class="px-6 py-4 text-center sm:px-4 sm:py-2 hidden md:table-cell">
          <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600 sm:text-xs sm:px-1 sm:py-0.5">
            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
            0412-0533144
          </span>
        </td>
        <td class="px-6 py-4 text-center sm:px-4 sm:py-2 hidden lg:table-cell">Femenino</td>
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
            <a x-data="{ tooltip: 'Ver' }" href="{{ route('verPsicologo') }}">
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
