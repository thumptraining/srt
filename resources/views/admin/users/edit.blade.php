<x-app-layout>
    
    <div class="container w-full overscroll-contain">
        
        <div class="w-full inline-flex items-center bg-neutral leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
            <a href="{{route('admin.users.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 inline-flex bg-white text-primary rounded-full px-3 justify-center items-center mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </a>
            <span class="inline-flex px-2 text-md md:text-lg uppercase text-white">Editar roles y permisos</span>
        </div>


        @if (session('status'))
            @livewire('alert.alerta')
        @endif

        <div class="container w-full bg-white  shadow-lg  transform  duration-200 easy-in-out card bordered mt-5 mb-24">
            
            <div class=" h-32 overflow-hidden bg-primary" ></div>

            <div class="flex justify-center px-5  -mt-12">
                <img class="h-32 w-32 bg-white p-2 rounded-full" src="{{$user->profile_photo_url}}" alt="{{$user->name}}" />
    
            </div>
        
            <div class=" ">
                
                <div class="text-center px-14">
                    <h2 class="text-gray-800 text-3xl font-bold">{{$user->name}}</h2>
                    <p class="text-gray-400 mt-2">{{$user->email}}</p>
                    <p class="text-gray-400 mt-2"></p>
                    <div class="border my-5"></div>
                    <h1 class="text-xl font-bold uppercase">Asignación de roles</h1>
                </div>

                <hr class="mt-6" />

                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' =>'put'])!!}
                    
                    <div class="flex bg-white ">
                        
                        <div class="flex-1 md:flex justify-between">

                            @foreach ($roles as $role)
                            
                                <div class="flex-1 text-center p-4 hover:bg-gray-100 cursor-pointer">
                                    {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'checkbox checkbox-primary']) !!}
                                    <p>{{$role->name}}</p>
                                </div>
                                <div class="border"></div>
                            
                            @endforeach

                            <div class="text-center p-4 hover:bg-gray-100 cursor-pointer">
                                {!! Form::submit('Asignar rol', ['class'=>'btn btn-wide btn-primary']) !!} {!! Form::close() !!}
                            </div>
                        </div>    
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        
    </div>
    
</x-app-layout>