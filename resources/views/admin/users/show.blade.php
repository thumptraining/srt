<x-app-layout>
  <div class="container overscroll-contain">

    <div class="w-full inline-flex items-center bg-neutral leading-none text-primary rounded-full p-2 shadow text-teal text-sm mb-3">
      <a href="{{route('admin.users.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 inline-flex bg-white text-primary rounded-full px-3 justify-center items-center mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
        </svg>
      </a>

      <span class="inline-flex px-2 text-md md:text-lg uppercase text-white">Información del usuario</span>
    </div>

    <div class="grid grid-cols-1 md:gap-4 md:grid-cols-3">

      <!-- INFO PERFIL -->
      <div class="container mx-auto max-w-sm rounded-lg overflow-hidden shadow-lg my-2 bg-white">
    
        <div class="relative z-5" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 5vw));">
          <img class="w-full" src="{{$user->profile_photo_url}}" alt="Profile image" />
        </div>
      
        <div class="pt-6 pb-8 px-5 text-gray-600 text-center tracking-wide uppercase text-lg font-bold">
          <p>{{$user->name}} </p>
          <p class="text-xs text-gray-400">{{$user->email}}</p>
        </div>

      </div>
      <!-- ESTADISTICAS PESO -->
      @livewire('components.users.peso')

    </div>
  </div>

</x-app-layout>