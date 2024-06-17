@extends('layouts.navbar')
@vite('resources/css/app.css')
<div class=" bg-white">
<div class="relative isolate px-6  lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
<div >
    
    <section class="py-24  sm:py-36 lg:py-28">
      <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
          <div class="max-w-2xl mx-auto text-center">
              <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                Preguntas Frecuentes de los Usuarios
              </h2>
          </div>
          <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
              <div
                  class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                  <button type="button" id="question1" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                  <span class="flex text-lg font-semibold text-black">¿Qué es Psyheal?</span>
                    <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    </button>
                    <div id="answer1" style="display:none" class="text-justify px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Psyheal es una plataforma diseñada para facilitar el acceso a servicios de salud mental. Su objetivo es proporcionar a los usuarios una forma fácil y accesible de conectarse con profesionales de la salud mental, como psicólogos y terapeutas, a través de herramientas digitales. Esta plataforma puede incluir características como:</p>
                        <ul class="list-disc list-inside">
                            <li><strong>Consultas en línea:</strong> Ofreciendo sesiones de terapia a través de videollamadas, chats o llamadas telefónicas.</li>
                            <li><strong>Recursos educativos:</strong> Proporcionando artículos, videos y otros materiales para ayudar a los usuarios a comprender mejor su salud mental.</li>
                            <li><strong>Herramientas de autoayuda:</strong> Incluyendo ejercicios de relajación, técnicas de mindfulness y seguimientos de estado de ánimo.</li>
                            <li><strong>Comunidades de apoyo:</strong> Facilitando foros y grupos donde los usuarios pueden compartir experiencias y recibir apoyo de otros.</li>
                        </ul>
                        <p>La plataforma Psyheal está orientada a hacer que el proceso de búsqueda de ayuda para la salud mental sea más sencillo y accesible para todos, eliminando barreras como la ubicación geográfica y el costo inicial.</p>
                    </div>

              </div>
              <div
                  class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                  <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                  <span class="flex text-lg font-semibold text-black">¿Cómo funcionan las citas?</span>
                    <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    </button>
                    <div id="answer2" style="display:none" class="text-justify px-4 pb-5 sm:px-6 sm:pb-6">
                        <p >Las citas en Psyheal funcionan a partir del usuario paciente identificado. El proceso es el siguiente:</p>
                        <ol class="list-decimal list-inside">
                            <li><strong>Identificación del usuario:</strong> El usuario debe estar registrado e identificado en la plataforma.</li>
                            <li><strong>Catálogo de psicólogos:</strong> El usuario se dirige al catálogo de psicólogos disponibles en la plataforma.</li>
                            <li><strong>Selección del psicólogo:</strong> El usuario selecciona al psicólogo que más le convenza, basándose en su perfil, especialización, y opiniones de otros usuarios.</li>
                            <li><strong>Agendado de la cita:</strong> Una vez seleccionado el psicólogo, el usuario agenda una cita a través de un formulario proporcionado por la plataforma.</li>
                        </ol>
                        <p>Este proceso asegura que el usuario pueda encontrar y conectarse fácilmente con el profesional de salud mental que mejor se adapte a sus necesidades.</p>
                    </div>

              </div>
              <div
                  class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                  <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                  <span class="flex text-lg font-semibold text-black">¿Cuánto tiempo dura una cita online?</span>
                    <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    </button>
                    <div id="answer3" style="display:none" class="text-justify px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Una cita online en Psyheal tiene una duración estándar de aproximadamente 45 minutos. Este tiempo permite al psicólogo y al paciente abordar los temas necesarios de manera efectiva, proporcionando un espacio adecuado para la exploración y el tratamiento de las preocupaciones del paciente.</p>
                    </div>

              </div>
              <div
                  class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                  <button type="button" id="question4" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                  <span class="flex text-lg font-semibold text-black">¿Cómo puedo ingresar a los foros?</span>
                    <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    </button>
                    <div id="answer4" style="display:none" class="text-justify px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Para ingresar a los foros en Psyheal, primero debes registrarte o iniciar sesión en tu cuenta. Una vez dentro, navega al apartado de <strong>"Foros"</strong> en el menú principal. Desde allí, podrás ver todas las categorías disponibles, participar en discusiones, hacer preguntas y compartir tus experiencias con otros miembros de la comunidad. Los foros son creados y administrados por el psicólogo.</p>
                    </div>

              </div>
          </div>

          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(30%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

      </div>
      <script>
          // JavaScript to toggle the answers and rotate the arrows
          document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
              button.addEventListener('click', function() {
                  var answer = document.getElementById('answer' + (index + 1));
                  var arrow = document.getElementById('arrow' + (index + 1));
  
                  if (answer.style.display === 'none' || answer.style.display === '') {
                      answer.style.display = 'block';
                      arrow.style.transform = 'rotate(0deg)';
                  } else {
                      answer.style.display = 'none';
                      arrow.style.transform = 'rotate(-180deg)';
                  }
              });
          });
      </script>
  </section>
  </div>
