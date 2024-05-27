@extends('layouts.navbar')    
@vite('resources/css/app.css')

    <div class="bg-white">


  <div class="relative isolate px-6  lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
<div >
    <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
      <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
        <div class="sm:max-w-lg">
          <h1 class="font text-2xl font-bold  text-gray-900 sm:text-4xl">HABLA CON UN PSICÓLOGO ONLINE DE FORMA FÁCIL, SEGURA Y PRIVADA</h1>
          <p class="mt-4 text-xl text-gray-500">Elige a tu psicólogo en línea, agenda tu cita y consigue la
          paz.</p>
        </div>
        <div>
          <div class="mt-10">
            <!-- Decorative image grid -->
            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
              <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                <div class="flex items-center space-x-6 lg:space-x-8">
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                  </div>
                </div>
              </div>
            </div>

            <a href="{{ route('register') }}" class="inline-block rounded-md border border-transparent bg-fondo py-3 px-8 text-center font-medium text-white hover:bg-indigo-700">Comienza Ahora!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section class="pb-10 bg-blueGray-200 -mt-24">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-cartas w-full mb-8 shadow-xl rounded-3xl	">
                    <div class=" flex-auto">
                        <img src="https://www.dropbox.com/scl/fi/o48rzttjpfc83gq7bq9u8/psico1.png?rlkey=p95pm4k0g4pns9y2px9rhhaux&st=etwwgxj0&raw=1" alt="Mi Imagen">
                      </div>
                      <div class="bg-contenidocartas px-4 py-4 rounded-lg">
                          <p class="text-black font-bold">Dr. Andreina Gonzalez Escaray</p>
                      </div>
                </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-cartas w-full mb-8 shadow-2xl rounded-3xl	">
                    <div class=" flex-auto">
                        <img src="https://www.dropbox.com/scl/fi/4177r0msd9ahl1bv28cco/psico2.png?rlkey=pqe7a3mgjmoqn8shs0stnztiu&st=qw6sj4la&raw=1" alt="Free Revisions">
                      </div>
                      <div class="bg-contenidocarta px-4 py-4 rounded-lg">
                          <p class="text-black font-bold">Dr. Alicia Ramirez Negron</p>
                      </div>
                </div>
            </div>
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-cartas w-full mb-8 shadow-xl rounded-3xl	">
                    <div class=" flex-auto">
                        <img src="https://www.dropbox.com/scl/fi/smv3qkxyoe1pysttdlrty/psico3.png?rlkey=ghymxp0ls926mn0n7224dmx87&st=s5tkymf5&raw=1" alt="Verified Company">
                      </div>
                      <div class="bg-contenidocartas px-4 py-4 rounded-lg">
                          <p class="text-black font-bold">Dr. José Gutierrez Mendoza</p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(30%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>

<section id="features" class="px-2 space-y-6 py-8 md:py-12  max-w-5xl mx-auto">
    <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">
        <h4 class="font-heading text-2xl leading-[1.1] sm:text-2xl md:text-2xl font-bold ">¿Cómo funciona la terapia psicológica online?</h4>
        <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
        Encuentra a tu psicólogo ideal en minutos y lleva a tu terapia psicológica a tu propio ritmo
    </div>
    <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3">
        <div class="relative overflow-hidden shadow-xl border bg-cartas p-2">
            <div class="  flex flex-col items-center justify-center "><img src="https://www.dropbox.com/scl/fi/hz5cc1yx2cb6hv4b6rgi3/icono1.png?rlkey=2vvrjxecokotivzw8dvs5y0jp&st=8ngtpz50&raw=1" alt="">
                <div class="space-y-2">
                    <h3 class="font-bold text-center">Elige a tu psicólogo</h3>
                    <p class="text-sm text-muted-foreground text-center">Nosotros te ayudamos, buscamos y seleccionamos a los mejores psicólogos online para ti.
                    </p>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden shadow-xl border bg-cartas p-2">
            <div class=" flex flex-col items-center justify-center "><img src="https://www.dropbox.com/scl/fi/rxduw86eki05pjig2p9v5/icono2.png?rlkey=phcz1ypxm8ki8ii4lmr3akga1&st=2gi5a2rw&raw=1" alt="">
                <div class="space-y-2">
                    <h3 class="font-bold text-center">Agenda tu cita online</h3>
                    <p class="text-sm text-muted-foreground text-center">Elige el día y la hora que mejor se adapte a tu rutina.</p>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden shadow-xl border bg-cartas p-2">
            <div class="flex flex-col items-center justify-center "><img src="https://www.dropbox.com/scl/fi/zehpar647j3ltcsbvicq8/icono3.png?rlkey=qsxgzrv4lq2v87xiblw47hppm&st=e12dpayc&raw=1" alt="">
                <div class="space-y-2">
                    <h3 class="font-bold text-center">Inicia tu terapia en línea</h3>
                    <p class="text-sm text-muted-foreground text-center">Conéctate a tu consulta psicológica a través de nuestra web y empieza a cambiar tu vida.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="relative isolate px-6  lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <section> 
    <div class="text-center mt-20 p-8"> 
        <div class="flex flex-wrap items-center justify-center text-left text-center"> 
            <div class="w-full md:w-3/5 lg:w-1/2 px-4"> 
                <img src="https://www.dropbox.com/scl/fi/drmn2dt75pallqwd8ld0l/psico4.png?rlkey=o5f42qi097fj7fsyn8lh3d700&st=mtbxsm5i&raw=1" alt="gem" class="inline-block w-7/12" > 
            </div> 
            <div class="w-full md:w-3/5 lg:w-1/2 px-4"> 
                <div class="font-heading text-2xl leading-[1.1] sm:text-2xl md:text-2xl font-bold"> 
                    <h2 class="pb-6"> 
                        Psyheal, un espacio seguro para ti 
                    </h2> 
                </div> 
                <div class="mt-2 text-gray-600 flex items-center justify-center md:justify-start">  
                    <i class="fas fa-check-circle ml-40"></i>  
                    <p>Recibe apoyo psicologico profesional, calido y humano.</p>  
                </div>  
                <div class="mt-2 text-gray-600 flex items-center justify-center md:justify-start">  
                    <i class="fas fa-check-circle ml-32"></i>  
                    <p>Lleva tu terapia psicologica a tu propio ritmo, desde donde estes.</p>  
                </div>  
                <div class="mt-2 text-gray-600 flex items-center justify-center md:justify-start">  
                    <i class="fas fa-check-circle ml-40"></i>  
                    <p>Complementa tu terapia liberando todo con nuestros expertos.</p>  
                </div>  
                <div class="flex justify-center mt-4"> 
                    <a href="{{ route('psicologos') }}" class="inline-block rounded-md border border-transparent bg-fondo py-3 px-8 text-center font-medium text-white hover:bg-indigo-700">Ver Psicólogos</a> 
                </div> 
            </div> 
        </div> 
    </div> 
</section>
 
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(30%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#02B9F3] to-[#93E1ED] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>
<section> 
    <div class="text-center p-8"> 
        <div class="flex flex-wrap items-center justify-center mt-20 text-center"> 
            <div class="md:w-3/5 lg:w-1/2 px-4"> 
                <img src="https://www.dropbox.com/scl/fi/wwbuz63vrs4rvj4c5d7sd/psico5.png?rlkey=9s8ir43xj1q1gg606vc3v1prk&st=mc0jqijw&raw=1" alt="bulk editing" class="inline-block size-2/3"> 
            </div> 
            <div class="w-full md:w-2/5 lg:w-1/2 px-4 md:order-first lg:pr-12"> 
                <h2 class="font-heading text-2xl leading-[1.1] sm:text-2xl md:text-2xl font-bold"> 
                    Si eres un psicologo experimentado, listo para ayudar a construir una vida con mayor bienestar a tus pacientes, forma parte de Psyheal y registrate! 
                </h2> 
                <p class="sm:text-lg mt-6"> 
                    Únete a nuestra red de profesionales comprometidos con el bienestar mental. Ofrecemos una plataforma de apoyo y recursos para optimizar tu práctica y maximizar el impacto positivo en tus pacientes. ¡Forma parte de nuestra comunidad hoy!
                </p> 
                <div class="flex justify-center mt-4"> 
                    <a href="{{ route('registerPs') }}" class="inline-block rounded-md border border-transparent bg-fondo py-3 px-8 text-center font-medium text-white hover:bg-indigo-700">Registrate aqui si eres psicologo!</a> 
                </div> 
            </div> 
        </div> 
    </div> 
</section>

      </div>
  </div>
  </div>
  


  <footer class="bg-white bg-cartas">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                  <img src="https://www.dropbox.com/scl/fi/4n4wdkem2wqbem18a2psx/logo.png?rlkey=devzl4gbkqlzc5mwehmvo7d8r&st=93ywi7dl&raw=1" class="h-8 me-3" alt="FlowBite Logo" />
              </a>
          </div>
          <div class="grid grid-cols-3 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-black">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>

     
