@extends('adminlte::page')
@vite('resources/css/app.css')



@section('content_header')
    <h1>    Perfil</h1>
@stop

@section('content')

<div class="bg-gray-100">
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-1 gap-6 px-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
            <div class="sm:col-span-1 lg:col-span-1 sm:col-start-1 lg:col-start-1">
                <div class="bg-cartas shadow rounded-lg p-6">
                    <div class="flex flex-col items-center">
                        <img src="https://randomuser.me/api/portraits/men/94.jpg"
                            class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
                        <h1 class="text-xl font-bold">John Doe</h1>
                        <p class="text-gray-700">Psicologo</p>
                    </div>
                    <hr class="my-6 border-t border-gray-300">
                    <div class="flex flex-col">
                        <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Información</span>
                        <ul>
                            <li class="mb-2">C.I: 13.876.369</li>
                            <li class="mb-2">0412-6664851</li>
                            <li class="mb-2">JonhDoe@gmail.com</li>
                            <li class="mb-2">Fecha de Ingreso: 23/05/2024</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-2 md:col-span-2 lg:col-span-3">
                <div class="bg-cartas shadow rounded-lg p-6">
                    <a href="#" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download">Editar Perfil</i>
                        </div>
                    </a> 
                    <!-- Contenido de las cuatro sub-cartas -->
                    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-2">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Diploma</h2>
                            <img
                                src="https://s3-sa-east-1.amazonaws.com/doctoralia.co/facility/9c9cd8/9c9cd83ad04d436d6647bdc900bd2863_large.jpg"
                                alt="">
                        </div>
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Descripción</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                finibus est vitae
                                tortor ullamcorper, ut vestibulum velit convallis. Aenean posuere risus non velit
                                egestas
                                suscipit. Nunc finibus vel ante id euismod. Vestibulum ante ipsum primis in faucibus
                                orci luctus
                                et ultrices posuere cubilia Curae; Aliquam erat volutpat. Nulla vulputate pharetra
                                tellus, in
                                luctus risus rhoncus id.
                            </p>
                        </div>
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Universidad</h2>
                            <p class="text-gray-700">Rafael Belloso Chacin
                            </p>
                        </div>
                        <div class="bg-white shadow rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Especialidad</h2>
                            <p class="text-gray-700">Psicologia Educativa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
