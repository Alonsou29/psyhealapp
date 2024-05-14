<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Psyheal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
 
         @vite('resources/css/app.css')
    </head>

    <body >
    <div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    

  <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          <span class="sr-only">Your Company</span>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-xl font-semibold leading-6 text-gray-900">Precios</a>
        <a href="#" class="text-xl font-semibold leading-6 text-gray-900">Preguntas Frecuentes</a>
        <a href="#" class="text-xl font-semibold leading-6 text-gray-900">Psicologos en linea</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="{{ route('login') }}" class="text-lg font-semibold leading-6 text-gray-900 pr-5">Iniciar Sesion </a>
        <a href="{{ route('register') }}" class="text-lg font-bold leading-6 text-gray-900">Registro <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
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
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Preguntas Frecuentes</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Psicologos en linea</a>
            </div>
            <div class="py-6">
              <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class="relative isolate px-6  lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
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

            <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-center font-medium text-white hover:bg-indigo-700">Comienza Ahora!</a>
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
                        <img src="https://previews.dropbox.com/p/thumb/ACTjQt3L9QNj8N86yItMgypRHcmMlbFSGwuKq3ivTRx_ZeORmn-wWLHw0_QIfHqHjlx05Hj13wXpu9Uoh3xpgmiw_HloJ5c5ml3bebP-7YmsticADGQCm6pxlsardczNzIhJpTJ1MsDESmQIWu_xvNALMB_E_iEle9waILIqzkMhKhf1KsDegJLWHNMyWe4Zt4iVDGCeeZS8f5tHo2vLSZCkK_fK2rgBx2diU2QHd320Ml6jmPFpzd9Nf-n1Xrzu_zsNV4m0zdWxii-JKS4afjQV72lUWI6mnDzxN04L9AELaS-6ZGVGFzSNDblA1meE0d-6HGpHXXa1rxZTfkbTEl0-/p.png" alt="Mi Imagen">
                      </div>
                      <div class="bg-contenidocartas px-4 py-4 rounded-lg">
                          <p class="text-black font-bold">Dr. Andreina Gonzalez Escaray</p>
                      </div>
                </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-cartas w-full mb-8 shadow-2xl rounded-3xl	">
                    <div class=" flex-auto">
                        <img src="https://previews.dropbox.com/p/thumb/ACS6-__yFsjBajamNWcTmKmkPazFLpgmPkprcpm4DEh04RFcF0J1GVDnzv4JSepKvpXw0i6MdVDsRj4wD4mXAV0TVcEkT440Atv71GBt8ORgb38MphU2MNEUYA7jf7PWr7Gw_wGY5G-DhFp92hN3VlCUCD8l5ZCq7vRDskpuFtFwqQdCCFwRXEoKM17TTH7C4jgQ7ZAAP7lP2MqsByjx9I3hkffaWMNPQT5d2yrlCaA78H0fuHMUPC0-v17wcSvqL2B2aRcQ51uQVN-8lt8DaWjVSCL9LC4T-neKRYAsySm1TkLep_ZB5RMiTDyWgWFc8tdy7BzwfKRN16zO2NmnlgF2/p.png" alt="Free Revisions">
                      </div>
                      <div class="bg-contenidocarta px-4 py-4 rounded-lg">
                          <p class="text-black font-bold">Dr. Alicia Ramirez Negron</p>
                      </div>
                </div>
            </div>
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                <div class="relative flex flex-col min-w-0 break-words bg-cartas w-full mb-8 shadow-xl rounded-3xl	">
                    <div class=" flex-auto">
                        <img src="https://previews.dropbox.com/p/thumb/ACR9tSOHGn5BZP75yuc6bOfl-ezzGeQXO8Qh6eqnRtl0DeviaGY51nqSyyNdEGISsJnk7d_h5F5o_1McXRnqrZk1MyRI3OYjgUdTGcIKnz75zJ-_66WTNT1lUjEXlawH3w-YFbqmB3OgbOfqc4HFU1tjbSbLeqXSdLBv7AfHbOzsoMYDsAwYD2Cji-KgNqlw2GfaY4ah_duDvVXNQktxMJec7abq19wZn4PkPfprgfFcs48pzRvgTAUWvMlFbyLPWBK_k3nkJ5R6gAMO4CT2OwcxUt6DHML1bQXm2bXXWRo3mujrEYK870mMIfPqSNPylj3p8Z82VBH2U-oZKIQdcbHB/p.png" alt="Verified Company">
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
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
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
            <div class="  flex flex-col items-center justify-center "><img src="https://previews.dropbox.com/p/thumb/ACSUu4-hgjjEMx8XWseJGAaZ1S6SMjXN8m5Eio-FKF3KlyeRssE2KBNmHn-XGdKdkfdZ1OaXVVtY0d3xkxF-ARc0dQnkBhKy9h5_ZZm30NTBlzeSIiIwtiDsdIp6A7brb062gr7jOxOfj-s16jXcz670wsJ100A2gtuthlltacIExGEqIiKREeBa9FYVl3vh-se5sEYKZFg45ymjbA2VO8H4YYQLBXLBIGZozMb3xp3rpx1y8HgFpIuA8KbHMYtg0oLfrInU1gc9KLyOAhxhD_Cb2NttHwYDR10HUGcHPCY6VXHWR99_qzvYux1g1pKBfskR4bJSS3QjsF-lPpdCD8bE/p.png" alt="">
                <div class="space-y-2">
                    <h3 class="font-bold text-center">Elige a tu psicólogo</h3>
                    <p class="text-sm text-muted-foreground text-center">Nosotros te ayudamos, buscamos y seleccionamos a los mejores psicólogos online para ti.
                    </p>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden shadow-xl border bg-cartas p-2">
            <div class=" flex flex-col items-center justify-center "><img src="https://previews.dropbox.com/p/thumb/ACSb5KO0blUjS4eNsOaanSq_PVqcOm42BjgKopA2tIUMqpddXK6Ni_31wH2T1ZqeqJry7psCDJe-ejuqjlSEL7nVcAjuXw_PUwwlq-zxSm-fwZClxM4Ih8aUgV99e2XXYP2QjTRlRWZxvSNrxY4oN6QbhdLJLDAPyyI9MNwo7gD7XOuc_96-mqNDaokdWQBRveLw4_nKn97gkrJToK8Mno2joMZFZGgyd5uDiWCKYyiLasp1w77b63xwf2sOyGVCapcpI-2YGUDAnagY_SjxDG_CbCpGh-nyYsOLOucek8sNvmpKm82JiFvmvVoSPtEDY5hBZDpPxg4PdiE7dNLeEJIa/p.png" alt="">
                <div class="space-y-2">
                    <h3 class="font-bold text-center">Agenda tu cita online</h3>
                    <p class="text-sm text-muted-foreground text-center">Elige el día y la hora que mejor se adapte a tu rutina.</p>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden shadow-xl border bg-cartas p-2">
            <div class="flex flex-col items-center justify-center "><img src="https://previews.dropbox.com/p/thumb/ACQ19ZVbpStg4NTPA02qtjmk96P0N1NCAuAM6L0_P3HYN1ahNdeejmlRcot7BEqmShg-tJIX-apKMTUZ4ZviWT-A2V_5xOoo9PGVWkfMzCa_kFO0xdp9zOksjbege_AHPRspsIxoANyL6ZumG2QLEZ0yJjWn2rvZk3j-R3MS7rRcnu3U6uHPFAeeth3QGNYRjBXlPfirwhxJKfwW_D4_c4MlAERDD7dgOlWXmhuZriFkcn4KKWZsRDcZdMoZeWlR8uBMJSPBYPWHmtQ_2ocbjLvrKz6ypwsp1JtdrfVoCSFjh0xSYGFX8jalSd01V6EPMB6ku51uhf5khJOQQr2QtWS0/p.png" alt="">
                <div class="space-y-2">
                    <h3 class="font-bold text-center">Inicia tu terapia en línea</h3>
                    <p class="text-sm text-muted-foreground text-center">Conéctate a tu consulta psicológica a través de nuestra web y empieza a cambiar tu vida.</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>


<script src="resources\js\app.js"></script>



    </body>
</html>
