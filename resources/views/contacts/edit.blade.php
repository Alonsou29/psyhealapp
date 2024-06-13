<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contacts
        </h2>
    </x-slot>


    

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <form action="{{route('contacts.update',$contact)}}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            @method('PUT')

            <x-validation-errors class="mb-4"/>
            <div class="mb-4">
                <label class="mb-1">
                    Nombre de contacto
                </label>
                <input type="text" name="nombre" value="{{old('name', $contact->nombre)}}" class="w-full" aria-placeholder="Ingrese el nombre de un paciente">
            </div>
            <div class="mb-4">
                <label class="mb-1">
                    Correo Electronico
                </label>
                <input type="email" name="email" value="{{old('email', $contact->user->email)}}" class="w-full" aria-placeholder="Ingrese el correo de un paciente">
            </div>

            <div class="flex justify-end">
                <button class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-cartas text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">Editar contacto</button>
            </div>


        </form>

    </div>


</x-app-layout>