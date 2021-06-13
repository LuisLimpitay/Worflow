<x-guest-layout>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <br>
        <hr><br>
        <h1 class="text-2xl text-center mb-4 text-black font-semibold">Iniciar Sesion</h1>
        <hr><br>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Olvidaste la Contraseña?') }}
                    </a>
                @endif
                <a class="inline-flex items-center ml-4 px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                    type="submit" href="{{ route('home') }}">
                    cancelar
                </a>
                <x-jet-button class="ml-2">
                    {{ __('ingresar') }}
                </x-jet-button>


            </div>

        </form><br>
        <hr><br>
        <div class="bg-green-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black "">
            <a href=" {{ route('register') }}">
            <p class="text-center font-semibold">Crea una cuenta gratis</p></a>
        </div>

    </x-jet-authentication-card>

</x-guest-layout>
