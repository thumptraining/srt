<div class="py-5 container ">
    @if (empty($beginners))
        <div>
            <h1 class="text-xl mx-10 text-gray-800">
                <i class="fas fa-sad-cry mr-2"></i> 
                Aún no hay entrenamientos que mostrar...
            </h1>
        </div>
    @else
        
        @foreach ($beginners as $item)
               
            <!-- component -->
            <div class="relative sm:pr-5">
                <div class="border-r-4 border-black absolute h-full top-0" ></div>
                <ul class="list-none m-0 p-0">
                    <li class="mb-5">
                        <div class="flex group items-center ">
                            <div class="bg-gray-800 group-hover:bg-red-700 z-10 rounded-full border-4 border-black  h-5 w-5">
                                <div class="bg-black h-1 w-6 items-center  ml-4 mt-1"></div>
                            </div>

                            <div class="flex-1 ml-4 z-10 font-medium">
                                <div class="order-1 space-y-2 bg-gray-800 rounded-lg shadow-only transition-ease  px-6 py-4">

                                    <p class="pb-4 text-md text-gray-100 font-bold">
                                        <i class="far fa-calendar-minus mr-2"></i>Día {{$item->day}} / Semana {{$item->week}}
                                    </p>

                                    <h3 class="mb-3 font-bold text-white text-2xl">
                                        Tipo de carrera: {{$item->categories}}
                                    </h3>
                                    
                                    <h3 class="mb-3 font-bold text-success text-xl">
                                        Calentamiento
                                    </h3>
                                    <!-- Descripcion calentamiento -->
                                    <p class="pb-4 text-sm text-gray-100">
                                        {{$item->warm}}
                                    </p>
                
                                    <div class="grid sm:grid-cols-3 border-t-2 border-b-2 border-white mt-2 py-3 justify-items-start text-white mb-5">

                                        <div class="my-2">
                                            <p class="text-sm">
                                                @switch(true)
                                                    @case($item->wzone == 'Suave')
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-info"></i>
                                                        @break
                                                    @case($item->wzone == 'Aeróbico')
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-green-400"></i>
                                                        @break
                                                    @case($item->wzone == 'Umbral aeróbico')
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-success"></i>
                                                        @break
                                                    @case($item->wzone == 'Umbral Anaeróbico') 
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-warning"></i>
                                                        @break
                                                    @case($item->wzone == 'VO2Máx')
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-error"></i>
                                                        @break
                                                @endswitch

                                                Zona: {{$item->wzone}}
                                            </p>
                                        </div>
                                        <div class="my-2">
                                            <p class="text-sm">
                                                <i class="fas fa-stopwatch mx-2"></i></i>Tiempo 
                                                
                                                @if ($item->whours < 10)
                                                    0{{ $item->whours }}
                                                @else
                                                    {{ $item->whours }}
                                                @endif
                                                :
                                                @if ($item->wminute < 10)
                                                    0{{ $item->wminute }}
                                                @else
                                                    {{ $item->wminute }}
                                                @endif
                                                :
                                                @if ($item->wseconds < 10)
                                                    0{{ $item->wseconds }}
                                                @else
                                                    {{ $item->wseconds }}
                                                @endif
        
                                            </p>
                                        </div>
                                        
                                    </div>

                                    <!-- Descripcion General -->
                                    <h3 class="mt-8 mb-3 font-bold text-error text-xl">
                                        Trabajo central.
                                    </h3>

                                    <p class="pb-4 text-sm text-gray-100">
                                        {{ $item->workout }}
                                    </p>

                                    <div class="grid sm:grid-cols-3 border-t-2 border-b-2 border-white text-white mt-2 mb-3 py-3 justify-items-start">
                                        
                                        <div class="my-2">
                                            <p class="text-sm">
                                                @switch(true)
                                                    @case($item->tzone == 'Suave')
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-info"></i>
                                                        @break
                                                    @case($item->tzone == 'Aeróbico')
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-green-400"></i>
                                                        @break
                                                    @case($item->tzone == 'Umbral aeróbico')
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-success"></i>
                                                        @break
                                                    @case($item->tzone == 'Umbral Anaeróbico') 
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-warning"></i>
                                                        @break
                                                    @case($item->tzone == 'VO2Máx')
                                                        <i class="fas fa-heartbeat mx-2 animate-ping text-error"></i>
                                                        @break
                                                @endswitch
                                                Zona: {{ $item->tzone }}
                                            </p>
                                        </div>
                                        <div class="my-2">
                                            <p class="text-sm">
                                                <i class="fas fa-stopwatch mx-2"></i></i>Tiempo 
                                                @if ($item->thours < 10)
                                                    0{{ $item->thours }}
                                                @else
                                                    {{ $item->thours }}
                                                @endif
                                                :
                                                @if ($item->tminute < 10)
                                                    0{{ $item->tminute }}
                                                @else
                                                    {{ $item->tminute }}
                                                @endif
                                                :
                                                @if ($item->tseconds < 10)
                                                    0{{ $item->tseconds }}
                                                @else
                                                    {{ $item->tseconds }}
                                                @endif
                                            </p>
                                        </div>
                                        <div class="my-2">
                                            <p class="text-sm">
                                                <i class="fas fa-redo mx-2 animate-spin"></i>Repeticiones: {{ $item->rep }}
                                            </p>
                                        </div>
                                        
                                    </div>

                                    <!-- Descripcion soltura -->
                                    <h3 class="mt-8 mb-3 font-bold text-info text-xl">
                                        Soltura.
                                    </h3>

                                    <p class="pb-4 text-sm text-gray-100">
                                        {{ $item->cool}}
                                    </p>

                                    <div class="grid sm:grid-cols-3 border-t-2 border-b-2 border-white text-white mt-2 mb-3 py-3 justify-items-start">
                                    
                                        <div class="my-2">
                                            <p class="text-sm">
                                                <i class="fas fa-heartbeat mx-2 animate-ping text-info"></i>
                                                Zona: Zona 1 o 2
                                            </p>
                                        </div>
                                        <div class="my-2">
                                            <p class="text-sm">
                                                <i class="fas fa-stopwatch mx-2"></i></i>Tiempo 
                                                @if ($item->chours < 10)
                                                    0{{ $item->chours }}
                                                @else
                                                    {{ $item->chours }}
                                                @endif
                                                :
                                                @if ($item->cminute < 10)
                                                    0{{ $item->cminute }}
                                                @else
                                                    {{ $item->cminute }}
                                                @endif
                                                :
                                                @if ($item->cseconds < 10)
                                                    0{{ $item->cseconds }}
                                                @else
                                                    {{ $item->cseconds }}
                                                @endif
                                            </p>
                                        </div>
                                        
                                    </div>
        
                                    @can('Crear Entrenamiento' )
                                        
                                        <form class="w-full" action="{{ route('beginners.destroy',$item->id) }}" method="POST">
                                            <div class="grid sm:grid-cols-2  border-b-2 border-white mt-2 mb-3 py-3 justify-items-start">
                                                <div class="w-11/12 my-2 mx-2">
                                                    <a href="{{ route('beginners.edit',$item->id) }}" class="btn btn-warning btn-block"><i class="fas fa-edit mr-2"></i>Editar</a>
                                                </div>
        
                                                @csrf
                                                @method('DELETE')
                                                <div class="w-11/12 my-2 mx-2">
                                                    <button type="submit" class="btn btn-error btn-block">
                                                        <i class="far fa-trash-alt mr-2"></i>Eliminar
                                                    </button>
                                                </div>
                                            
                                            </div>
                                        </form>
                                    @endcan

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
    
        @endforeach
        
    @endif
</div>

