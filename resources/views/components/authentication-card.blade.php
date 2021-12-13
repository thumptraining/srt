<div class=" bg-white relative flex flex-col justify-center items-center">
    <div class="w-full sm:w-1/2 md:w-5/12 md:border md:border-gray-300 bg-white md:shadow-lg shadow-none rounded p-10" >
        <div class="flex flex-col items-center space-y-3">
            {{ $logo }}
            <span class="text-2xl font-semi-bold leading-normal" >Ingresar</span>
            <p class="leading-normal">Usa tu cuenta para ingresar.</p>
        </div>
        {{ $slot }}
    </div>
</div>