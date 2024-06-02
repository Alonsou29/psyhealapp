@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content')

<!-- component -->
<div class="flex flex-col lg:flex-row justify-center lg:items-start">
  <div class="bg-gray-100 lg:mr-5 ">
    <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
      <img class="w-32 h-32 rounded-full mx-auto" src="https://picsum.photos/200" alt="Profile picture">
      <h2 class="text-center text-2xl font-semibold mt-3">John Doe</h2>
      <div class="mt-5">
        <h3 class="text-xl font-semibold">Biografía</h3>
        <p class="text-gray-600 mt-2">John is a software engineer with over 10 years of experience in developing web and mobile applications. He is skilled in JavaScript, React, and Node.js.</p>
      </div>
    </div>
  </div>

  <div class="bg-white shadow-md rounded-lg lg:w-[700px] max-w-[95%] mx-auto mt-5 p-3 lg:p-5">
    <div class=" mb-8 w-full ">
      <h4 class="px-2 text-xl font-bold text-navy-700 text-black">Información General</h4>
    </div> 
    <div class="grid grid-cols-2 gap-4 px-2">
      <div class="flex flex-col items-start justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
        <p class="text-sm text-gray-600">Telefono</p>
        <p class="text-base font-medium text-navy-700 dark:text-white">0412-6664851</p>
      </div>

      <div class="flex flex-col justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
        <p class="text-sm text-gray-600">Email</p>
        <p class="text-base font-medium text-navy-700 dark:text-white">jonhdoe@gmail.com</p>
      </div>

      <div class="flex flex-col items-start justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
        <p class="text-sm text-gray-600">Fecha Nacimiento</p>
        <p class="text-base font-medium text-navy-700 dark:text-white">20/10/1999</p>
      </div>

      <div class="flex flex-col justify-center rounded-2xl bg-contenidocarta bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
        <p class="text-sm text-gray-600">Descripción del Problema</p>
        <p class="text-base font-medium text-navy-700 dark:text-white">xd</p>
      </div>
    </div>
  </div>
</div>



@stop
