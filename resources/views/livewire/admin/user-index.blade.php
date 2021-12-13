
<div class="overflow-x-auto w-screen">
    <div class="container ">
        <div class="w-full inline-flex items-center bg-neutral leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
            <a href="{{route('dashboard')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 inline-flex bg-white text-primary rounded-full px-3 justify-center items-center mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </a>
            <span class="inline-flex px-2 text-md md:text-lg uppercase text-white">Listado de usuarios</span>
        </div>
    </div>
    
    <div class="w-full  mt-5 bg-white flex items-center justify-center font-sans overflow-hidden">
        
        <div class="w-full ">

            <div class="w-full h-10 pl-3 pr-2 bg-white border rounded-full flex justify-between items-center relative">
                <input placeholder="Buscar usuario" class="appearance-none w-full outline-none focus:outline-none active:outline-none" wire:model="search" />
                <div class="ml-1 outline-none focus:outline-none active:outline-none">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       viewBox="0 0 24 24" class="w-6 h-6">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                  </svg>
                </div>
            </div>

            @if ($users->count())
                <div class="bg-white shadow-md rounded my-6">
      
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-3 sm:px-6 text-left w-1">N°</th>
                                <th class="py-3 px-3 sm:px-6 text-left">Nombre</th>
                                <th class="py-3 px-3 sm:px-6 text-center hidden md:table-cell">Mail</th>
                                <th class="py-3 px-3 sm:px-6 text-center">Acciones</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($users as $user)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="w-1 py-3 px-3 sm:px-6 text-left whitespace-nowrap">
                                        {{$user->id}}
                                    </td>
                                    <td class="py-3 px-3 sm:px-6 text-left">
                                        <div class="flex items-center">
                                            <div class="mr-2">
                                                <img class="w-6 h-6 rounded-full" src="{{$user->profile_photo_url}}"/>
                                            </div>
                                            <span>{{$user->name}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 sm:px-6 text-center hidden md:table-cell">
                                        <div class="flex items-center justify-center">
                                            <span>{{$user->email}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-3 sm:px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <a href="{{route('admin.users.show', $user )}}" class="w-4 mr-2 transform hover:text-primary hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>

                                            <a href="{{route('admin.users.edit', $user )}}" class="w-4 mr-2 transform hover:text-warning hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        
                                        </div>
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                        
                    </table>
                    <tfoot>
                        <div class="px-5 py-3">
                            {{$users->links()}}
                        </div>
                    </tfoot>
            @else
                <div class="alert alert-error px-10 mt-5">
                    <div class="flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">    
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>                      
                        </svg> 
                        <label>No hay datos para mostrar</label>
                    </div>
                </div>
            @endif

            </div>
        </div>
    </div>
</div>

