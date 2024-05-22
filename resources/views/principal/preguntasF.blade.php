@extends('layouts.navbar')
@vite('resources/css/app.css')
<div class=" bg-white">
<div class="relative isolate px-6  lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
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
                      <span class="flex text-lg font-semibold text-black">  Que es Phyheal?</span>
                      <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                          class="w-6 h-6 text-gray-400">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                      </svg>
                  </button>
                  <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                      <p>Getting started is easy! Sign up for an account, and you'll have access to our platform's
                          features. No credit card required for the initial signup.</p>
                  </div>
              </div>
              <div
                  class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                  <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                      <span class="flex text-lg font-semibold text-black">Como funcionan las citas?</span>
                      <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                          class="w-6 h-6 text-gray-400">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                      </svg>
                  </button>
                  <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                      <p>Our pricing structure is flexible. We offer both free and paid plans. You can choose the one
                          that
                          suits your needs and budget.</p>
                  </div>
              </div>
              <div
                  class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                  <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                      <span class="flex text-lg font-semibold text-black">Cuanto tiempo dura una cita online?</span>
                      <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                          class="w-6 h-6 text-gray-400">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                      </svg>
                  </button>
                  <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                      <p>We offer comprehensive customer support. You can reach out to our support team through
                          various
                          channels, including email, chat, and a knowledge base.</p>
                  </div>
              </div>
              <div
                  class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                  <button type="button" id="question4" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                      <span class="flex text-lg font-semibold text-black">Como puedo ingresar a los foros?</span>
                      <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                          class="w-6 h-6 text-gray-400">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                      </svg>
                  </button>
                  <div id="answer4" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                      <p>Yes, you can cancel your subscription at any time without any hidden fees. We believe in
                          providing a hassle-free experience for our users.</p>
                  </div>
              </div>
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
