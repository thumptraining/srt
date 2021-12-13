<div class="w-full  mt-5 bg-white flex items-center justify-center font-sans overflow-hidden">
    
    <div class="container w-full overscroll-contain">
        
        <div class="w-full inline-flex items-center bg-neutral leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
            <a href="{{route('dashboard')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 inline-flex bg-white text-primary rounded-full px-3 justify-center items-center mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </a>
            <span class="inline-flex px-2 text-md md:text-lg uppercase text-white">Controles de peso.</span>
        </div>


        <div class="w-full ">
            
            <div>
                <a href="{{ route('weights.create') }}" class='btn btn-primary my-5'>
                    Nuevo Registro
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 ml-2 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
    
                </a>
            </div>

            @livewire('alert.form')

            @if (count($weights) == 0)
                @livewire('components.no-found')
            @else
                <div class="bg-white shadow-md rounded my-6">
                    
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-3 sm:px-6 text-left w-1"></th>
                                <th class="py-3 px-3 sm:px-6 text-left">N°</th>
                                <th class="py-3 px-3 sm:px-6 text-center">Peso</th>
                                <th class="py-3 px-3 sm:px-6 text-center hidden md:table-cell">Fecha</th>
                                <th class="py-3 px-3 sm:px-6 text-center ">Opciones</th>
                            </tr>
                        </thead>
                    
                        <tbody class="text-gray-600 text-sm font-light">
                            
                                @foreach ($weights as $key => $weight)
                                
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
            
                                    <td class="py-3 px-3 sm:px-6 text-left">
                                        <div class="flex items-center">
                                            <div class="mr-2">
                                                <i class="fas fa-weight text-2xl"></i>
                                            </div>
                                        </div>     
                                    </td>
                                
                                    <td scope="row" class="w-1 py-3 px-3 sm:px-6 text-left whitespace-nowrap">
                                        {{ ++$key }}
                                    </td>
                                
                                    <td class="py-3 px-3 sm:px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <span>{{$weight->peso}}</span>
                                        </div>
                                    </td>
                                
                                    <td class="py-3 px-3 sm:px-6 text-center hidden md:table-cell">
                                        <div class="flex items-center justify-center">
                                            <span>{{ date_format($weight->created_at, 'd-m-Y') }}</span>
                                        </div>
                                    </td>
                                
                                    <td class="py-3 px-3 sm:px-6 text-center">
                                        <form action="{{ route('weights.destroy',$weight->id) }}" method="POST">
                                
                                            <div class="flex item-center justify-center">
                                                <a href="{{ route('weights.edit',$weight->id) }}" class="w-4 mr-2 transform hover:text-warning hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>
                                
                                                @csrf
                                                @method('DELETE')
                                
                                                <button type="submit" class="w-4 mr-2 transform hover:text-error hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                
                                                </button>
                                            
                                            </div>
                                        </form>
                                    </td>
                                
                                </tr>
                                @endforeach  
                            
                                
                        </tbody>
                        
                    </table>
                    
                    <tfoot>
                        <div class="px-5 py-3">
                            {{$weights->links()}}
                        </div>
                    </tfoot>

                </div>
            @endif
            
        </div>
    </div>
</div>




