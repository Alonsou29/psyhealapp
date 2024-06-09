@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content')

    <div class="bg-gradiente mt-10 font-[sans-serif] p-6 rounded-3xl">
        <div class="container mx-auto flex flex-col justify-center items-center">
            <h2 class="text-white text-3xl font-bold mb-4"> Juegos para Aliviar el Estrés</h2>
            <p class="text-white text-base text-center mb-6">Los juegos de rompecabezas y actividades relajantes pueden ayudar a reducir el estrés y promover la relajación. Estos juegos ofrecen una forma divertida y efectiva de desconectar de las preocupaciones diarias y encontrar un momento de calma y tranquilidad.</p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
            <!-- Game Card 1 -->
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                <img class="w-full" src="https://www4.minijuegosgratis.com/v3/games/thumbnails/233480_7_sq.jpg" alt="Daily Jigsaw">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Daily Jigsaw</div>
                    <p class="text-gray-700 text-xs">
                        Disfruta de un nuevo rompecabezas todos los días. ¡Comienza el día con un desafío relajante y divertido!
                    </p>
                </div>
                <div class="px-6 pb-4 text-center">
                    <button onclick="openGame('https://www.minijuegos.com/embed/daily-jigsaw')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Jugar!
                    </button>
                </div>
            </div>

            <!-- Game Card 2 -->
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                <img class="w-full" src="https://aisrtlspiele-a.akamaihd.net/rtlspielemobil/img5c12829aecdc4/24-058w8w/24-058w8w/320x320/2955/jigsaw-city-trip.png" alt="Jigsaw City Trip">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Jigsaw City Trip</div>
                    <p class="text-gray-700 text-xs">
                        Arma los rompecabezas para descubrir imágenes de hermosas ciudades. ¡Relájate mientras viajas desde la comodidad de tu hogar!
                    </p>
                </div>
                <div class="px-6 pb-4 text-center">
                    <button onclick="openGame('https://y8.com/embed/jigsaw_city_trip')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Jugar!
                    </button>
                </div>
            </div>

            <!-- Game Card 3 -->
            <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                <img class="w-full" src="https://www4.minijuegosgratis.com/v3/games/thumbnails/235243_7_sq.jpg" alt="Microsoft Solitaire Collection">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Microsoft Solitaire Collection</div>
                    <p class="text-gray-700 text-xs">
                        Disfruta del clásico juego de solitario en tu navegador. ¡Despeja tu mente y relájate con un juego de cartas!
                    </p>
                </div>
                <div class="px-6 pb-4 text-center">
                    <button onclick="openGame('https://www.minijuegos.com/embed/microsoft-solitaire-collection')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Jugar!
                    </button>
                </div>
            </div>
        </div>

        <!-- Game iframe -->
        <div id="gameContainer" class="mt-8 hidden justify-center">
            <iframe id="gameIframe" src="" scrolling="no" class="w-full h-96 border-0" style='max-width: 800px; height: 600px; margin: auto;' frameborder='0' allowfullscreen></iframe>
        </div>
    </div>

    <script>
        function openGame(url) {
            const gameContainer = document.getElementById('gameContainer');
            const gameIframe = document.getElementById('gameIframe');
            
            gameIframe.src = url;
            gameContainer.classList.remove('hidden');
            gameContainer.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
@stop
