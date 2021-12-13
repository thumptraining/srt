@if (isset($c, $speed))
<div class="my-5 sm:mx-5">
    <div class="transform  hover:scale-105 transition duration-300 shadow-md rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
        <div class="p-5">
            <div class="flex justify-between">
                <i class="fas fa-bolt text-primary text-3xl"></i>
                <div class="bg-primary rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                    <span class="flex items-center">
                        Ritmo 
                        @if ($speed->pminute < 10)
                            0{{ $speed->pminute }}
                        @else
                            {{ $speed->pminute }}
                        @endif
                        :
                        @if ($speed->pseconds < 10)
                            0{{ $speed->pseconds }}
                        @else
                            {{ $speed->pseconds }}
                        @endif
                         min/km
                    </span>
                </div>
                
                
            </div>
            <div class="ml-2 w-full flex-1">
                <div>
                    <div class="mt-3 text-3xl font-bold leading-8">{{$speed->distance}} Metros</div>
    
                    <div class="mt-1 text-base text-primary">
                        El tiempo fue de 
                        @if ($speed->hours < 10)
                        0{{ $speed->hours }}
                        @else
                            {{ $speed->hours }}
                        @endif
                        :
                        @if ($speed->minute < 10)
                            0{{ $speed->minute }}
                        @else
                            {{ $speed->minute }}
                        @endif
                        :
                        @if ($speed->seconds < 10)
                            0{{ $speed->seconds }}
                        @else
                            {{ $speed->seconds }}
                        @endif

                        @if ($speed->hours > 0)
                            hrs.
                        @else

                            @if ($speed->min > 0)
                                min.
                            @else
                                Seg.
                            @endif
                            
                        @endif
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div> 
 
@else
<div class="my-5 sm:mx-5">
    <div class="transform  hover:scale-105 transition duration-300 shadow-md rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
        <div class="p-5">
            <div class="flex justify-between">
                <i class="fas fa-bolt text-primary text-3xl"></i>
                <div class="bg-primary rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                    <span class="flex items-center">
                        Sin datos...
                    </span>
                </div>
                
                
            </div>
            <div class="ml-2 w-full flex-1">
                <div>
                    <div class="mt-3 text-3xl font-bold leading-8">Sin datos...</div>
    
                    <div class="mt-1 text-base text-primary">
                        Debes ingresar datos...
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div> 
   
@endif



