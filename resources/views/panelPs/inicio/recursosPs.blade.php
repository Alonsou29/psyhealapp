@extends('adminlte::page')
@vite('resources/css/app.css')


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
                    <a href="https://www.federaciocatalanatdah.org/wp-content/uploads/2018/12/dsm5-manualdiagnsticoyestadisticodelostrastornosmentales-161006005112.pdf" target="_blank" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro I: DSM-5 (Manual Diagnóstico y Estadístico de los Trastornos Mentales - Quinta Edición)
                        </div>
                    </a> 
                </div> 
            </div>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="https://www.dropbox.com/scl/fi/l9baocqe74685kl6bppxs/Beck_Rush_Shaw_y_Emeri_Terapia_cognitiva.pdf?rlkey=kiuuwv92rj31tl96ojq056bww&st=8nv6a6hz&raw=1" target="_blank" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro II: Manual de Terapia Cognitivo-Conductual para la Depresión
                        </div>
                    </a> 
                </div> 
            </div>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="https://beckperu.com/wp-content/uploads/2020/04/Manual-para-el-tratamiento-cognitivo-conductual-de-los-trastornos-psicologicos-Vicente-Caballo.pdf" target="_blank" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro III: Manual para el tratamiento cognitivo-conductual de los trastornos psicológicos
                        </div>
                    </a> 
                </div> 
            </div>

            <h1 class="text-4xl font-bold mt-4">Pruebas de Evaluación y Medición</h1>

            
            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="http://www.umag.cl/facultades/salud/nutricion/wp-content/uploads/2021/11/INVENTARIO_DE_ANSIEDAD_DE_BECK_1.pdf" target="_blank" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Prueba I: Evaluación de ansiedad por Beck (BAI)
                        </div>
                    </a> 
                </div> 
            </div>
            
            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="https://uapa.cuaieed.unam.mx/sites/default/files/minisite/static/911f3feb-b698-4c1f-a203-b38dbc741928/estres%20reconocelo/descargables/Escala_de_estres_percibido.pdf" target="_blank" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Prueba II: Escalas de estres 
                        </div>
                    </a> 
                </div> 
            </div>
            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="https://pavlov.psyciencia.com/2014/08/inventariodedepresiondebeck.pdf" target="_blank" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Prueba III: Evaluación de depresión por Beck (BAI)
                        </div>
                    </a> 
                </div> 
            </div>


            <h1 class="centrar-texto text-4xl font-bold mt-8">Recursos en formato Audiovisual:</h1>
            <div class="mt-4 flex content-center mb-5 video-container">
            <iframe width="360" height="210" src="https://www.youtube.com/embed/dkHqqY2IL6s?si=xqAPto5DFrhpD3AX"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="360" height="210" src="https://www.youtube.com/embed/R1aVrJ3qEeM?si=uPfAsAtGMkyoLvdB"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <iframe width="360" height="210" src="https://www.youtube.com/embed/CzCe6tTjh3w?si=gj63ADmVHMko0BaA"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="360" height="210" src="https://www.youtube.com/embed/kz36o6V5b3c?si=kd3IuSaj-Cp1CKkC"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

        </div>
    </div>
</div>
@stop

