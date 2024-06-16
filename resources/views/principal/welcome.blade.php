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
        <div class="flex flex-wrap items-center justify-center  text-center"> 
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
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Registros</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Paciente</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Psicólogo</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Diagnósticos</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Dass-21</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Otros</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Pagos</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Catalogo Psicólogos</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-black">© 2024 <a href="https://flowbite.com/" class="hover:underline">JUL™</a>. Todos los derechos reservados.
          </span>
          
      </div>
    </div>
</footer>

     
