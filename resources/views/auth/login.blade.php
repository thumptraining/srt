<x-guest-layout>
    
    <x-jet-authentication-card>

        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            @livewire('alert.alerta')
        @endif

        <form method="POST" action="{{ route('login') }}" class="my-8">
            @csrf

            <div class="relative mb-2">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="relative mb-2">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <div class="block mt-4">
                <x-jet-button>
                    {{ __('Entrar') }}
                </x-jet-button>
            </div>

            <div class="block mt-4">
                <a class="btn btn-block btn-outline " href="{{ route('register') }}">
                  {{ __('¿Aún no estas registrado?') }}
                </a>
            </div>

            <div class="block mt-5 text-center">
                @if (Route::has('password.request'))
                    <a class="link link-primary" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>

           
        </form>

    </x-jet-authentication-card>

</x-guest-layout>
