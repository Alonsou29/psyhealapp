@extends('adminlte::page')
@vite('resources/css/app.css')

@section('title', 'Dashboard')

@section('content')

<!-- component -->
<div class="">
    
    <div class="bg-cover w-full flex justify-center items-center ">
    <div class=" mt-4 w-full bg-white   bg-opacity-40 backdrop-filter backdrop-blur-lg rounded-3xl">
        <div class=" mt-4 w-12/12 mx-auto rounded-2xl bg-white p-1 bg-opacity-40 backdrop-filter backdrop-blur-lg">
            
            
            <div class="bg-gradiente mt-10 font-[sans-serif] p-6 rounded-3xl">
                        <div class="container mx-auto flex flex-col justify-center items-center">
                            <h2 class="text-white text-3xl font-bold mb-4"> Rercursos para Psicologos</h2>
                            <p class="text-white text-base text-center mb-6">Cuenta con diversos libros de diagnosticos y consultas! Ademas tambien podras contar con archivos multimedia.</p>
                        </div>
                    </div>
               
            </div>
            <h1 class="text-4xl font-bold mt-4">Recursos en formato libros:</h1>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="#" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro I: Psicologia jijia
                        </div>
                    </a> 
                </div> 
            </div>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="#" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro II: Loquero  
                        </div>
                    </a> 
                </div> 
            </div>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="#" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro III: Te amo nct
                        </div>
                    </a> 
                </div> 
            </div>

            <h1 class="text-4xl font-bold mt-8">Recursos en formato Audiovisual:</h1>
            <div class="mt-4 flex space-x-56 content-center">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/JmM04_OgajU?si=1sTQGfVAOZnCpnTo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/6BawyJf4aKs?si=h9sZT9Hr1zD7pbv_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@stop

