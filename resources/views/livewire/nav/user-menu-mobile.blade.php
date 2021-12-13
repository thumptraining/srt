<div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
    <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
    class="transition-opacity rounded-full opacity-80 hover:opacity-100 focus:outline-none">
        <img class="w-12 h-12 rounded-full shadow-md" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        <span class="sr-only">User menu</span>
    </button>

    <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu" tabindex="-1" class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none" role="menu" aria-orientation="vertical" aria-label="user menu">

        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Perfil</a>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <a href="{{ route('api-tokens.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ __('API Tokens') }}</a>
        @endif
        

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();
            this.closest('form').submit();">Cerrar</a>
        </form>
    </div>
</div>