<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('fontawesome\css\all.css')}}">
        
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>

        <div class="relative min-h-screen  grid bg-black ">
            <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 ">
                <div class="relative sm:w-1/2 xl:w-3/5 bg-primary h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden  text-white bg-no-repeat bg-cover " style="background-image: url({{asset('img/fondo-2.png')}}); background-size: cover; background-repeat: no-repeat; background-position: center; ">
                    <div class="absolute bg-black  opacity-25 inset-0 z-0"></div>
                </div>

                <div class="md:flex md:items-center md:justify-left w-full sm:w-auto md:h-full xl:w-1/2 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none ">
                    <div class="max-w-xl w-full space-y-12 ">
                        <div class="lg:text-left text-center">
                            <img src="{{asset('img/srt.png')}}" alt="{{ config('app.name', 'Laravel') }}" class="w-28 mx-auto">
                            <h2 class="mt-6 text-5xl font-bold text-gray-100 uppercase text-center">
                                ¡Hola runner!
                            </h2>
                            <p class="mt-10 text-xl text-gray-200 text-center">Este es el portal de entrenamiento de Soy Runner Team.</p>
                        </div>
                        @if (Route::has('login'))
                            <div class="grid sm:grid-cols-2 gap-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="btn btn-primary">Entrar</a>
        
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline btn-primary">Registrar</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
    
                    <div>
                </div>

            </div>
        </div>

        @livewireScripts

    </body>
</html>