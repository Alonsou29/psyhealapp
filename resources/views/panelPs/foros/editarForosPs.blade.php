@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content_header')
    <h1>Editar Foro</h1>
@stop

@section('content')

<!-- component -->
<div class="">
    <div class="bg-cover w-full flex justify-center items-center ">
        <div class="w-full bg-white p-5 bg-opacity-40 backdrop-filter backdrop-blur-lg rounded-3xl">
            <div class="w-12/12 mx-auto rounded-2xl bg-white p-1 bg-opacity-40 backdrop-filter backdrop-blur-lg">
                
                <script defer>
                    document.addEventListener('DOMContentLoaded', function () {
                        const nameInput = document.getElementById('nombre');
                        const addNameButton = document.getElementById('agregar_nombre');
                        const nameList = document.getElementById('listado_nombres');

                        addNameButton.addEventListener('click', function (e) {
                            e.preventDefault();
                            const nameValue = nameInput.value.trim();
                            if (nameValue) {
                                const listItem = document.createElement('li');
                                listItem.className = "flex justify-between items-center p-2 bg-gray-100 rounded mb-2";
                                listItem.innerHTML = `
                                    ${nameValue}
                                    <button type="button" class="remove_name text-red-500">Eliminar</button>
                                `;
                                nameList.appendChild(listItem);

                                listItem.querySelector('.remove_name').addEventListener('click', function () {
                                    nameList.removeChild(listItem);
                                });

                                nameInput.value = '';
                            }
                        });
                    });
                </script>
                
                <form>
                    <div class="mb-6">
                        <x-label for="titulo" value="Título" />
                        <x-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" placeholder="Ingrese el título" required />
                    </div>
                    <div class="mb-6">
                        <x-label for="categoria" value="Categoría" />
                        <select id="categoria" name="categoria" class="block mt-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required>
                            <option value="disable">Seleccione una categoría</option>
                            <option value="ansiedad">Ansiedad</option>
                            <option value="estres">Estrés</option>
                            <option value="depresion">Depresión</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <x-label for="descripcion" value="Descripción" />
                        <textarea id="descripcion" name="descripcion" class="block mt-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" placeholder="Ingrese la descripción" required></textarea>
                    </div>
                    <div class="mb-6">
                        <x-label for="nombre" value="Agregar Nombre" />
                        <div class="flex">
                            <x-input id="nombre" class="block mt-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 mr-2" type="text" placeholder="Ingrese el nombre" />
                            <button id="agregar_nombre" class="bg-contenidocartas text-white text-sm rounded-lg px-4 py-2">Agregar</button>
                        </div>
                    </div>
                    <div class="mb-6">
                        <x-label value="Nombres Seleccionados" />
                        <ul id="listado_nombres" class="list-none p-0">
                            <!-- Names will be added here -->
                        </ul>
                    </div>
                    <button type="submit" class="text-white bg-contenidocartas hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Guardar Cambios</button>
                </form>

            </div>
        </div>
    </div>
</div>

@stop
