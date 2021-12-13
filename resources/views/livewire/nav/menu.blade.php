<div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 border-indigo-100 shadow-lg sm:left-16 rounded-tr-3xl rounded-br-3xl sm:w-72 lg:static lg:w-64">
    <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">

        <!-- LOGO MENU FINAL -->
        <div class="flex items-center justify-center flex-shrink-0 py-10">
            <a href="{{ route('dashboard') }}">
                <x-application-mark class="w-24 h-auto"/>
            </a>
        </div>

        <!-- Links -->
        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">

            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-block  btn-outline">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 mr-2 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>

                Dashboard
                  
            </a> 
   
           
            @can('Editar usuarios' )
                <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-block btn-outline">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 mr-2 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>

                    Usuarios
                    
                </a>
            @endcan

            @can('Crear controles' )
                <a href="{{ route('weights.index') }}" class="btn btn-sm btn-block btn-outline">
                    <i class="fas fa-weight inline-block w-4 h-4 mr-2 stroke-current"></i>

                    Peso   
                </a>
            @endcan

            @can('Crear controles' )
                <a href="{{ route('speeds.index') }}" class="btn btn-sm btn-block btn-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 mr-2 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>

                    Carreras
                    
                </a>
            @endcan

            @can('Ver Entrenamiento' )
                <a href="{{ route('beginners.index') }}" class="btn btn-sm btn-block btn-outline">
                    <i class="fas fa-running inline-block w-4 h-4 mr-2 stroke-current"></i>
                    
                    Plan 5km a 10km
                    
                </a>
            @endcan

            @can('Ver Entrenamiento' )
                <a href="{{ route('intermediates.index') }}" class="btn btn-sm btn-block btn-outline">
                    <i class="fas fa-running inline-block w-4 h-4 mr-2 stroke-current"></i>
                    
                    Plan 21 km
                    
                </a>
            @endcan

            @can('Ver Entrenamiento' )
                <a href="{{ route('advances.index') }}" class="btn btn-sm btn-block btn-outline">
                    <i class="fas fa-running inline-block w-4 h-4 mr-2 stroke-current"></i>
                    
                    Maratón
                    
                </a>
            @endcan
            

        </div>

        <!-- contenido menu -->
        <div class="flex-shrink-0 p-4 mt-10">
            <div class="hidden p-2 space-y-6 bg-gray-100 rounded-lg md:block">
                
            </div>  
        </div>
    </nav>

    <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
        <h2 class="text-xl">Messages</h2>
    </section>

    <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
        <h2 class="text-xl">Notifications</h2>
    </section>
</div>