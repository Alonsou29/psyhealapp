<x-guest-layout>
    <div class="min-h-screen bg-login text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <a href="{{ route('welcome') }}" class="absolute top-16 flex items-center text-cyan-600 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span>Volver</span>
                </a>
                
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf
                    
                    <div>
                        <h1 class="text-2xl xl:text-3xl font-extrabold mt-12 text-center">Bienvenidos a Psyheal!</h1>
                    </div>
                    
                    <h1 class="text-2xl xl:text-2xl font-extrabold mt-12 text-center">
                        Iniciar Sesión
                    </h1>
                    
                    <div class="w-full flex-1 mt-8">
                        <div class="mb-4">
                            <input type="email" id="email" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>
                        
                        <div class="mb-4">
                            <input type="password" id="password" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Contraseña" name="password" required autocomplete="current-password" />
                        </div>
                        
                        <div class="mb-4">
                            <label for="remember_me" class="flex items-center">
                                <input type="checkbox" id="remember_me" name="remember" class="form-checkbox">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                            </label>
                        </div>
                        
                        <div class="flex items-center justify-center mt-4">
                            <button type="submit" class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-cartas text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                                <span class="ml-3">
                                    Entrar
                                </span>
                            </button>
                        </div>
                        
                        <div class="text-center mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                            {{ __(' No estas registrado?') }}
                        </a>
                    </div>
                </form>
            </div>
            
            <div class="flex-1 bg-cartas text-center hidden lg:flex rounded-3xl">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('https://www.dropbox.com/scl/fi/5bztcsif7p9zwp49ia9oc/login.png?rlkey=44h12n5jxic27o7e1r41aemth&st=am3lccvj&raw=1');">
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Usuario o contraseña incorrectos.',
            });
        </script>
    @endif
</x-guest-layout>
