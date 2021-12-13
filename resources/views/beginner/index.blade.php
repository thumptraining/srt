<x-app-layout>
    <div class="w-full mt-5 bg-white flex items-center justify-center font-sans overflow-hidden">
    
        <div class="container w-full  overscroll-contain">

            @livewire('alert.form')

            <div class="w-full inline-flex items-center bg-neutral leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
                <a href="{{route('dashboard')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 inline-flex bg-white text-primary rounded-full px-3 justify-center items-center mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                </a>
                <span class="inline-flex px-2 text-md md:text-lg uppercase text-white">Plan 5km a 10km</span>
            </div>
            
            @can('Crear Entrenamiento' )
                <div>
                    <a href="{{ route('beginners.create') }}" class='btn btn-primary my-5'>
                        Nuevo Registro
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 ml-2 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
        
                    </a>
                </div>
            @endcan

            @livewire('plan.beginner')
        </div>
    </div>
</x-app-layout>