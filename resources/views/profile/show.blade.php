<x-app-layout>

    <div class="w-full mt-5 bg-white flex items-center justify-center font-sans overflow-hidden">
    
        <div class="container w-full  overscroll-contain">

            <div class="w-full inline-flex items-center bg-neutral leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
                <a href="{{route('dashboard')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 inline-flex bg-white text-primary rounded-full px-3 justify-center items-center mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                </a>
                <span class="inline-flex px-2 text-md md:text-lg uppercase text-white">Perfil</span>
            </div>


            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
           
                @livewire('profile.update-password-form')

            @endif

            <!-- Aqui deberia haber autenticacion 2 pasos -->

            
            
            @livewire('profile.logout-other-browser-sessions-form')
     

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
               
                @livewire('profile.delete-user-form')
              
            @endif
        </div>
    </div>
  
</x-app-layout>
