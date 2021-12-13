@if (isset($c, $weight ))
    <div class="my-5 sm:mx-5">
        <div class="transform  hover:scale-105 transition duration-300 shadow-md rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
            <div class="p-5">
                <div class="flex justify-between">
                    <i class="fas fa-weight h-7 w-7 text-primary text-3xl"></i>
                    
                    @if ($c > 0)
                        <div class="bg-error rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                            <span class="flex items-center">
                                + {{$c}} Kg
                            </span>
                        </div>
                    @else
                        <div class="bg-success rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                            <span class="flex items-center">
                                {{$c}} Kg
                            </span>
                        </div>
                    @endif
                    
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">{{$weight->peso}} KG</div>
        
                        
                        @if ($c > 0)
                            <div class="mt-1 text-base text-primary">
                                Desde tu último registro ganaste peso.
                            </div>
                        @else
                        @if ($c == 0)
                            <div class="mt-1 text-base text-primary">
                                No haz ganado ni perdido peso.
                            </div>  
                        @else
                            <div class="mt-1 text-base text-primary">
                                Desde tu último registro perdiste peso.
                            </div>
                        @endif
                        
                        @endif
                        
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
                <i class="fas fa-weight h-7 w-7 text-blue-400 text-3xl"></i>

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


 