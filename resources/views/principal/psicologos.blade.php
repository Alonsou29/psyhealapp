@extends('layouts.navbar')
@vite('resources/css/app.css')
@php
    use App\Models\Psicologos;
    use App\Models\User;

    $psicolos = Psicologos::all();
@endphp
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div>
        <div class="py-24 sm:py-36 lg:py-28">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl text-center">Catálogo de Psicólogos</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-16 sm:py-28 lg:py-20">
                    @foreach ($psicolos as $psico)
                        @php
                            $datospsico = User::find($psico->id_user);
                        @endphp
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="w-full h-64">
                                <img src="storage/{{ $datospsico->profile_photo_path }}" alt="" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4">
                                <h2 class="text-lg font-bold mb-2">Nombre: {{ $datospsico->first_name }}</h2>
                                <p class="text-gray-700 mb-2">Cédula: {{ $datospsico->cedula }} </p>
                                <p class="text-gray-700 mb-4">Enfoque: Ansiedad</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(30%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>
