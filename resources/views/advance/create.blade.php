<x-app-layout>
    <div class="overflow-x-auto w-screen">
    <div class="container ">
        <div class="w-full inline-flex items-center bg-neutral leading-none text-primary rounded-full p-2 shadow text-teal text-sm">
            <a href="{{route('beginners.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11 inline-flex bg-white text-primary rounded-full px-3 justify-center items-center mx-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </a>
            <span class="inline-flex px-2 text-md md:text-lg uppercase text-white">Ingresar Entrenamiento</span>
        </div>
    </div>
    <div class="w-full overflow-hidden flex justify-center items-center bg-white">
        <div class="w-full my-2 md:w-4/5 lg:w-4/5">
            <div class="flex justify-center items-center mt-10 mb-20">
                    <form  method="POST" action="{{ route('advances.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('advance.form')

                    </form>
                </div>
            </div>
        </div>
    </div> 
</x-app-layout>