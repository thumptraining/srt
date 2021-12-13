<div class="transform  hover:scale-105 transition duration-300 container w-full  rounded-lg overflow-hidden shadow-lg my-2 bg-white">
    <div class="relative mb-6">
       <img class="w-full" src="{{Auth::user()->profile_photo_url}}" alt="Profile picture" />
    </div>
    <div class="py-10 px-6 text-center tracking-wide grid grid-cols-1 gap-6">
       <div class="posts">
          <p class="text-lg">{{Auth::user()->name}}</p>
          <p class="text-gray-400 text-sm">Nombre</p>
       </div>
       <div class="followers">
          <p class="text-lg">{{Auth::user()->email}}</p>
          <p class="text-gray-400 text-sm">Email</p>
          <a href="{{ route('profile.show') }}" class="btn btn-block btn-sm mt-5">Editar Perfil</a>
       </div>
   
    </div>
</div>