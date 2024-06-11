@extends('adminlte::page')
@vite('resources/css/app.css')

@section('content')

<div class="bg-gradiente mt-10 font-[sans-serif] p-6 rounded-3xl">
    <div class="container mx-auto flex flex-col justify-center items-center">
        <h2 class="text-white text-3xl font-bold mb-4">Juegos para Aliviar la Ansiedad</h2>
        <p class="text-white text-base text-center mb-6">Los juegos de relajación y creatividad, como los juegos de doblar papel y colorear mandalas, pueden ser herramientas efectivas para aliviar la ansiedad. Estos juegos proporcionan actividades sencillas y repetitivas que permiten a los jugadores enfocar su mente, disminuir el estrés y fomentar la calma.</p>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Game Card 1 -->
        <div class="max-w-xs mx-auto rounded overflow-hidden shadow-lg bg-white flex flex-col items-center">
            <img class="w-full h-48 object-cover" src="https://www2.minijuegosgratis.com/v3/games/thumbnails/239292_7_sq.jpg" alt="Paper Fold">
            <div class="px-6 py-4 flex flex-col items-center">
                <div class="font-bold text-xl mb-2">Paper Fold</div>
                <p class="text-gray-700 text-xs text-center">
                     Dobla las esquinas tocando sobre la parte del papel que quieras plegar y disfruta construyendo cientos de imágenes. ¡Tendrás que prestar mucha atención al orden ya que si te equivocas tendrás que volver a empezar de nuevo! Diviértete relajando tu mente.
                </p>
            </div>
            <div class="px-6 text-center mb-4">
                <button onclick="openGame('https://www.minijuegos.com/embed/paper-fold')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Jugar!
                </button>
            </div>
        </div>

        <!-- Game Card 2 -->
        <div class="max-w-xs mx-auto rounded overflow-hidden shadow-lg bg-white flex flex-col items-center">
            <img class="w-full h-48 object-cover" src="https://www1.minijuegosgratis.com/v3/games/thumbnails/218122_7_sq.jpg" alt="Mandala Coloring Book">
            <div class="px-6 py-4 flex flex-col items-center">
                <div class="font-bold text-xl mb-2">Colorea Mandalas</div>
                <p class="text-gray-700 text-xs text-center">
                    Escoge tu Mandala favorito!
                    Relájate coloreando hermosas imágenes. Coloréalas a tu gusto y haz del mundo un lugar más colorido. Da rienda suelta a tu imaginación y colorea todo lo que quieras.
                </p>
            </div>
            <div class="px-6 text-center mb-4">
                <button onclick="openGame('https://www.minijuegos.com/embed/mandala-coloring-book')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Jugar!
                </button>
            </div>
        </div>

        <!-- Game Card 3 -->
        <div class="max-w-xs mx-auto rounded overflow-hidden shadow-lg bg-white flex flex-col items-center">
            <img class="w-full h-48 object-cover" src="https://img.y8.com/cloud/v2-y8-thumbs-small-thumbnails-001/139449/small.gif" alt="Jelly Splash Crush">
            <div class="px-6 py-4 flex flex-col items-center">
                <div class="font-bold text-xl mb-2">Jelly Splash Crush</div>
                <p class="text-gray-700 text-xs text-center">
                    Conecta las jaleas del mismo color para hacerlas desaparecer y ganar puntos. ¡Un juego relajante y divertido para aliviar el estrés!
                </p>
            </div>
            <div class="px-6 text-center mb-4">
                <button onclick="openGame('https://y8.com/embed/jelly_splash_crush')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Jugar!
                </button>
            </div>
        </div>

        <!-- Game Card 4 -->
        <div class="max-w-xs mx-auto rounded overflow-hidden shadow-lg bg-white flex flex-col items-center">
            <img class="w-full h-48 object-cover" src="https://img.y8.com/cloud/v2-y8-thumbs-small-thumbnails-001/142983/small.gif" alt="Sweet Candy Collection">
            <div class="px-6 py-4 flex flex-col items-center">
                <div class="font-bold text-xl mb-2">Sweet Candy Collection</div>
                <p class="text-gray-700 text-xs text-center">
                    Combina los caramelos del mismo color para hacerlos desaparecer y ganar puntos. ¡Disfruta de este delicioso y relajante juego!
                </p>
            </div>
            <div class="px-6 text-center mb-4">
                <button onclick="openGame('https://y8.com/embed/sweet_candy_collection')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
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
