<x-app-layout>
    <div class="w-full mt-5 bg-white flex items-center justify-center font-sans overflow-hidden">
    
        <div class="container w-full  overscroll-contain">

     
            <div class="w-full inline-flex items-center bg-neutral leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
                <a href="{{route('dashboard')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 inline-flex bg-white text-primary rounded-full px-3 justify-center items-center mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </a>
                <span class="inline-flex px-2 text-md md:text-lg uppercase text-white">Dashboard</span>
            </div>

            <div class="grid sm:grid-cols-3 gap-4  my-5 mx-5 ">
                
                <div>
                    @livewire('dashboard.profile-view')
                </div>

                <div class="sm:col-span-2">
                    <div>
                        @livewire('dashboard.weight-statics')
                    </div>
                    
                    <div>
                        @livewire('dashboard.speed-statics')
                    </div>  
                    <div>
                        @livewire('dashboard.strava-activiades')
                    </div>
                </div>
                
            </div>
        </div>
    </div>
         
</x-app-layout>
