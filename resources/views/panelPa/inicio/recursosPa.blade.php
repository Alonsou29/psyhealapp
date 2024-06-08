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
                            <h2 class="text-white text-3xl font-bold mb-4"> Rercursos para Pacientes</h2>
                            <p class="text-white text-base text-center mb-6">Cuenta con diversos libros de diagnosticos y consultas! Ademas tambien podras contar con archivos multimedia.</p>
                        </div>
                    </div>
               
            </div>
            <h1 class="text-4xl font-bold mt-4">Recursos en formato libros:</h1>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="https://seduc.edomex.gob.mx/sites/seduc.edomex.gob.mx/files/files/padres_familia/fomento-lectura/Tolle_Eckhart-El_Poder_del_Ahora%20(1).pdf" target="_blank" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro I: El Poder del Ahora - Eckhart Tolle
                        </div>
                    </a> 
                </div> 
            </div>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="https://www.budismolibre.org/docs/libros_budistas/Mark_Williams_Danny_Penman_Mindfulness.pdf" target="_blank" class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro II: Mindfulness: Guía Práctica - Mark Williams y Danny Penman
                        </div>
                    </a> 
                </div> 
            </div>

            <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-10"> 
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse"> 
                    <a href="https://www.dropbox.com/scl/fi/2nfz0e4c3h9vooybvt216/pdfcoffee.com_buenos-dias-alegria-como-superar-la-tristeza-y-alcanzar-el-equilibrio-emocional-spanish-edition-by-jesus-matos-matos-jesus-4-pdf-free.pdf?rlkey=cf6dj0601jzt5y08awakqrxfq&st=bnmgojua&raw=1" target="_blank"  class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="bg-blue-500 border border-blue-700 text-white rounded-lg p-2">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            Libro III: Buenos días, alegría: cómo superar la tristeza y alcanzar el equilibrio emocional - Jesús Matos

                        </div>
                    </a> 
                </div> 
            </div>

            <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
                <!-- Depresión -->
                <div class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question1" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6" onclick="toggleAnswer(1)">
                        <span class="flex text-lg font-semibold text-black">Depresión</span>
                        <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>La depresión es un trastorno del estado de ánimo que causa un sentimiento persistente de tristeza y pérdida de interés.</p>
                        <!-- Sub-acordeones -->
                        <div class="space-y-4 mt-4">
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion1-1" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(1, 1)">
                                    <span class="flex text-md font-semibold text-black">Causas</span>
                                    <svg id="subarrow1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer1-1" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>Las causas pueden incluir factores genéticos, cambios bioquímicos y situaciones de vida estresantes.</p>
                                </div>
                            </div>
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion1-2" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(1, 2)">
                                    <span class="flex text-md font-semibold text-black">Síntomas</span>
                                    <svg id="subarrow1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer1-2" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>Los síntomas incluyen tristeza persistente, falta de interés en actividades y fatiga.</p>
                                </div>
                            </div>
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion1-3" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(1, 3)">
                                    <span class="flex text-md font-semibold text-black">Tratamiento</span>
                                    <svg id="subarrow1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer1-3" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>El tratamiento puede incluir terapia, medicación y cambios en el estilo de vida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ansiedad -->
                <div class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6" onclick="toggleAnswer(2)">
                        <span class="flex text-lg font-semibold text-black">Ansiedad</span>
                        <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>La ansiedad es una respuesta natural del cuerpo al estrés. Es un sentimiento de miedo o aprensión sobre lo que vendrá.</p>
                        <!-- Sub-acordeones -->
                        <div class="space-y-4 mt-4">
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion2-1" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(2, 1)">
                                    <span class="flex text-md font-semibold text-black">Causas</span>
                                    <svg id="subarrow2-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer2-1" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>Las causas de la ansiedad pueden incluir factores genéticos, estrés crónico y eventos traumáticos.</p>
                                </div>
                            </div>
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion2-2" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(2, 2)">
                                    <span class="flex text-md font-semibold text-black">Síntomas</span>
                                    <svg id="subarrow2-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer2-2" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>Los síntomas incluyen palpitaciones, sudoración, nerviosismo y sensación de pánico.</p>
                                </div>
                            </div>
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion2-3" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(2, 3)">
                                    <span class="flex text-md font-semibold text-black">Tratamiento</span>
                                    <svg id="subarrow2-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer2-3" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>El tratamiento incluye terapia cognitivo-conductual, medicación y técnicas de relajación.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Estrés -->
                <div class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6" onclick="toggleAnswer(3)">
                        <span class="flex text-lg font-semibold text-black">Estrés</span>
                        <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>El estrés es una reacción física y emocional normal ante las exigencias de la vida.</p>
                        <!-- Sub-acordeones -->
                        <div class="space-y-4 mt-4">
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion3-1" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(3, 1)">
                                    <span class="flex text-md font-semibold text-black">Causas</span>
                                    <svg id="subarrow3-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer3-1" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>Las causas pueden incluir problemas laborales, financieros, y personales.</p>
                                </div>
                            </div>
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion3-2" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(3, 2)">
                                    <span class="flex text-md font-semibold text-black">Síntomas</span>
                                    <svg id="subarrow3-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer3-2" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>Los síntomas incluyen dolores de cabeza, insomnio, y problemas digestivos.</p>
                                </div>
                            </div>
                            <div class="transition-all duration-200 bg-gray-100 border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-200">
                                <button type="button" id="subquestion3-3" data-state="closed" class="flex items-center justify-between w-full px-4 py-3 sm:p-4" onclick="toggleSubAnswer(3, 3)">
                                    <span class="flex text-md font-semibold text-black">Tratamiento</span>
                                    <svg id="subarrow3-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="subanswer3-3" style="display:none" class="px-4 pb-3 sm:px-5 sm:pb-4">
                                    <p>El tratamiento incluye técnicas de relajación, ejercicio físico y apoyo psicológico.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h1 class="centrar-texto text-4xl font-bold mt-8">Recursos en formato Audiovisual:</h1>
            <div class="mt-4 flex content-center mb-5 video-container">
            <iframe width="360" height="210" src="https://www.youtube.com/embed/1eZepcg6aC0?si=uWVRwwtkerN9CaqI"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="360" height="210" src="https://www.youtube.com/embed/dwnveRXNrTI?si=GBl4_0ob1gFrB5fC"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <iframe width="360" height="210" src="https://www.youtube.com/embed/D_ZPwuRgdOE?si=YSI3_YHoH-x-n9p9"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="360" height="210" src="https://www.youtube.com/embed/xTR3zvNGkpA?si=yJpf3BumpYPHBdZi"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

        </div>
    </div>
</div>

<script>
function toggleAnswer(id) {
    const answer = document.getElementById(`answer${id}`);
    const arrow = document.getElementById(`arrow${id}`);
    const state = document.getElementById(`question${id}`).dataset.state;

    if (state === "closed") {
        answer.style.display = "block";
        arrow.style.transform = "rotate(180deg)";
        document.getElementById(`question${id}`).dataset.state = "open";
    } else {
        answer.style.display = "none";
        arrow.style.transform = "rotate(0deg)";
        document.getElementById(`question${id}`).dataset.state = "closed";
    }
}

function toggleSubAnswer(mainId, subId) {
    const subAnswer = document.getElementById(`subanswer${mainId}-${subId}`);
    const subArrow = document.getElementById(`subarrow${mainId}-${subId}`);
    const subState = document.getElementById(`subquestion${mainId}-${subId}`).dataset.state;

    if (subState === "closed") {
        subAnswer.style.display = "block";
        subArrow.style.transform = "rotate(180deg)";
        document.getElementById(`subquestion${mainId}-${subId}`).dataset.state = "open";
    } else {
        subAnswer.style.display = "none";
        subArrow.style.transform = "rotate(0deg)";
        document.getElementById(`subquestion${mainId}-${subId}`).dataset.state = "closed";
    }
}
</script>
@stop

