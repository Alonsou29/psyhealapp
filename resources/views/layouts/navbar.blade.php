<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psyheal</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{ route('welcome') }}" class="flex items-center -m-1.5 p-1.5">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        <span class="ml-2 text-lg font-semibold text-gray-900">Psyheal</span>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" id="mobile-menu-button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="{{ route('panelPs') }}" class="text-xl font-semibold leading-6 text-gray-900">Precios</a>
                    <a href="{{ route('preguntasF') }}" class="text-xl font-semibold leading-6 text-gray-900">Preguntas Frecuentes</a>
                    <a href="{{ route('psicologos') }}" class="text-xl font-semibold leading-6 text-gray-900">Psicologos en linea</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-lg font-semibold leading-6 text-gray-900 pr-5">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-lg font-semibold leading-6 text-gray-900 pr-5">Iniciar Sesion</a>
                            @if (Route::has('register'))
                                <a href="{{ route('registerPs') }}" class="ml-4 inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4  text-base font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Registro</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" id="mobile-menu" role="dialog" aria-modal="true" style="display: none;">
                <div class="fixed inset-0 z-50 bg-gray-600 bg-opacity-75"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="flex items-center -m-1.5 p-1.5">
                            <span class="sr-only">Psyheal</span>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                            <span class="ml-2 text-lg font-semibold text-gray-900">Psyheal</span>
                        </a>
                        <button type="button" id="close-mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Precios</a>
                                <a href="{{ route('preguntasF') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Preguntas Frecuentes</a>
                                <a href="{{ route('psicologos') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Psicologos en linea</a>
                            </div>
                            <div class="py-6">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Iniciar Sesion</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="mt-4 block w-full text-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Registro</a>
                                        @endif
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeMobileMenuButton = document.getElementById('close-mobile-menu');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.style.display = 'block';
            });

            closeMobileMenuButton.addEventListener('click', function () {
                mobileMenu.style.display = 'none';
            });
        });
    </script>
</body>
</html>
