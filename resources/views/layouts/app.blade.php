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

        <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
            <div class="flex h-screen antialiased text-gray-900 bg-white dark:bg-dark dark:text-light">

                <!-- LOADING -->
                @livewire('loading')

                <!-- SIDEBAR  -->
                <div class="flex flex-shrink-0 transition-all">

                    <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"></div>

                    <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>

                    <!-- BOTON MOBILE -->
                    <nav aria-label="Options" class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-indigo-100 sm:hidden shadow-t rounded-t-3xl z-50
                    ">
                        
                        <!-- Menu button -->
                        <button @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary hover:text-white" :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">

                            <span class="sr-only">Toggle sidebar</span>
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </button>

                        <!-- LOGO MOBIL -->
                        <a href="{{ route('dashboard') }}">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>

                        <!-- MENU USUARIO MOBIL -->
                        @livewire('nav.user-menu-mobile')

                    </nav>

                    <!-- Left mini bar -->
                    <nav aria-label="Options" class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-r-2 border-indigo-100 shadow-md sm:flex rounded-tr-3xl rounded-br-3xl">
                        
                        <!-- LOGO MENU PC -->
                        <div class="flex-shrink-0 py-4">
                            <a href="{{ route('dashboard') }}">
                                <x-jet-application-mark class="block h-9 w-auto" />
                            </a>
                        </div>

                        <div class="flex flex-col items-center flex-1 p-2 space-y-4">
                            
                            <!-- BOTON DE MENU -->
                            <button @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary hover:text-white" :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
                                <span class="sr-only">Toggle sidebar</span>
                                <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                                </svg>
                            </button>

                            <!-- Messages button -->
                            

                            <!-- Notifications button -->
                            
                        </div>

                        <!-- MENU USUARIO PC-->
                        @livewire('nav.user-menu-lg')

                    </nav>

                    <!-- CONTENIDO DEL MENU -->

                    @livewire('nav.menu')

                </div>

                <!-- AQUI DEBERIA ESTAR HEADER MOBILE-->

                <!-- CONTENIDO DE DE LA PAGINA -->
                <div class="container overflow-y-scroll ">
                    <div class="flex flex-1 items-center justify-center px-4 pt-4 pb-24">
                        {{$slot}}
                    </div>
                </div>
                
 
                <!-- AQUI DEBERIA ESTAR BACKDROPS-->

                @livewireScripts

            </div>
        </div>

        <script>
            const setup = () => {
                return {
                isSidebarOpen: false,
                currentSidebarTab: null,
                isSettingsPanelOpen: false,
                isSubHeaderOpen: false,
                watchScreen() {
                    if (window.innerWidth <= 1024) {
                    this.isSidebarOpen = false
                    }
                },
            }
            }
        </script>
    </body>
</html>
