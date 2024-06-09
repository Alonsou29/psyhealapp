@extends('adminlte::page')
@vite('resources/css/app.css')


@section('content')

<div class="bg-gradiente mt-10 font-[sans-serif] p-6 rounded-3xl">
                        <div class="container mx-auto flex flex-col justify-center items-center">
                            <h2 class="text-white text-3xl font-bold mb-4"> Juegos para Aliviar la Depresión</h2>
                            <p class="text-white text-base text-center mb-6">Los juegos de decoración de espacios y pixel art ofrecen una experiencia lúdica y creativa que puede ser especialmente beneficiosa para personas que padecen depresión. Estos juegos permiten a los jugadores sumergirse en actividades relajantes y gratificantes, promoviendo un estado mental positivo y proporcionando una forma constructiva de distraerse de pensamientos negativos.</p>
                        </div>
                    </div>
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Game Card 1 -->
        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white flex flex-col justify-between">
            <img class="w-full" src="https://img.y8.com/cloud/v2-y8-thumbs-small-thumbnails-001/173669/small.png" alt="Decor Bathroom">
            <div class="px-6 py-4 flex-grow">
                <div class="font-bold text-xl mb-2">Decorar mi baño</div>
                <p class="text-gray-700 text-xs">
                    A todo el mundo le gusta decorar sus espacios favoritos y otros objetos exquisitos. El cuarto de baño se puede decorar con una gran variedad de objetos. Para empezar, pinte las paredes y los suelos adyacentes a la bañera y el cuarto de baño, así como la zona donde se lava la ropa, y después coloque allí las alfombras y las toallas.
                </p>
            </div>
            <div class="px-6 pb-4 text-center">
                <button onclick="openGame('https://y8.com/embed/decor_bathroom')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Jugar!
                </button>
            </div>
        </div>

        <!-- Game Card 2 -->
        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white flex flex-col justify-between">
            <img class="w-full" src="https://img.y8.com/cloud/v2-y8-thumbs-small-thumbnails-001/172385/small.gif" alt="Decor Bedroom">
            <div class="px-6 py-4 flex-grow">
                <div class="font-bold text-xl mb-2">Decorar mi dormitorio</div>
                <p class="text-gray-700 text-xs">
                    Decorar mi Dormitorio es un divertido juego de decoración de habitaciones. Disfruta y prepara la habitación muy ordenada y colorida. Utiliza diferentes elementos de decoración, como camas, pósters de pared, mesas, sillas de juego, ventanas y mucho más. 
                </p>
            </div>
            <div class="px-6 pb-4 text-center">
                <button onclick="openGame('https://y8.com/embed/decor_bedroom')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Jugar!
                </button>
            </div>
        </div>

        <!-- Game Card 3 -->
        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white flex flex-col justify-between">
            <img class="w-full" src="https://img.y8.com/cloud/v2-y8-thumbs-big-thumbnails-001/151669/big.gif" alt="Decor My Garden">
            <div class="px-6 py-4 flex-grow">
                <div class="font-bold text-xl mb-2">Decorar mi jardín</div>
                <p class="text-gray-700 text-xs">
                    Da rienda suelta a tu creatividad diseñando y personalizando tu propio oasis de jardín. Elige entre una amplia gama de árboles, vallas, plantas, flores, bancos y otros encantadores adornos para dar vida a tu visión.
                </p>
            </div>
            <div class="px-6 pb-4 text-center">
                <button onclick="openGame('https://y8.com/embed/decor_my_garden')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Jugar!
                </button>
            </div>
        </div>

        <!-- Game Card 4 -->
        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white flex flex-col justify-between">
            <img class="w-full" src="https://img.y8.com/cloud/v2-y8-thumbs-big-thumbnails-001/151885/big.gif" alt="Decor My Livingroom">
            <div class="px-6 py-4 flex-grow">
                <div class="font-bold text-xl mb-2">Decorar mi sala</div>
                <p class="text-gray-700 text-xs">
                    Con una amplia gama de muebles, electrodomésticos, decoraciones, papeles pintados y suelos, los jugadores pueden dar rienda suelta a su imaginación para crear el salón de sus sueños. Desde elegantes diseños modernos a acogedores refugios rústicos, las posibilidades son infinitas.
                </p>
            </div>
            <div class="px-6 pb-4 text-center">
                <button onclick="openGame('https://y8.com/embed/decor_my_livingroom')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Jugar!
                </button>
            </div>
        </div>

        <!-- Game Card 5 -->
        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white flex flex-col justify-between">
            <img class="w-full" src="https://www5.minijuegosgratis.com/v3/games/thumbnails/243304_7_sq.jpg" alt="Colojon">
            <div class="px-6 py-4 flex-grow">
                <div class="font-bold text-xl mb-2">Pixel Art</div>
                <p class="text-gray-700 text-xs">
                    Colojon es un juego de pixel art casual repleto de emociones en el que podrás colorear un sinfín de imágenes pixeladas con mucha paciencia para relajarte tras un largo y estresante día en el trabajo.
                </p>
            </div>
            <div class="px-6 pb-4 text-center">
                <button onclick="openGame('https://www.minijuegos.com/embed/colojon')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
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
