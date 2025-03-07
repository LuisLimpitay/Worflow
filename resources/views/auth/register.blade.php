<x-app-layout>
<x-guest-layout>
    <div class="bg-black">
        <x-jet-authentication-card>
            <x-slot name="logo"><br>
            </x-slot>

            <h1 class="text-2xl mb-4 text-center text-black font-semibold">Formulario de Registro</h1>
            <hr><br>

            {{-- <x-jet-validation-errors class="mb-4" /> --}}
            <form method="POST" autocomplete="off" action="{{ route('register') }}">
                @csrf

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-jet-label for="name" /><small class="text-red-500">* </small> Nombre /s
                        <x-jet-input id="name" class="block mt-1 w-full" placeholder="Estaban" type="text" name="name"
                            :value="old('name')" />
                        @error('name')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="md:w-1/2 px-3">
                        <x-jet-label for="last_name" /><small class="text-red-500">* </small> Apellido
                        /s
                        <x-jet-input id="last_name" class="block mt-1 w-full" placeholder="Lamonte" type="text"
                            name="last_name" :value="old('last_name')" />
                        @error('last_name')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-jet-label for="phone" /><small class="text-red-500">* </small> Telefono Celular
                    <x-jet-input id="phone" class="block mt-1 w-full" placeholder="Ej: 297111222" pattern="[0-9]{10}"
                        maxlength="10" type="tel" name="phone" :value="old('phone')" /><small><i>Ingrese un numero que
                            no conternga el prefijo
                            0 y 15</i> </small>
                    <br>
                    @error('phone')
                        <small class="text-red-600">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="md:w-1/2 px-3">
                        <x-jet-label for="expire_license" /><small class="text-red-500">*
                        </small>Venciminiento L.N.C.
                        <x-jet-input id="expire_license" class="block mt-1 w-full" min="2021-08-03" type="date"
                            name="expire_license  " :value="old('expire_license')" />
                        @error('expire_license')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-jet-label for="email" /><small class="text-red-500">* </small> Email
                        <x-jet-input id="email" placeholder="example@gmail.com" class="block mt-1 w-full" type="email"
                            name="email" :value="old('email')" />
                        @error('email')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="md:w-1/2 px-3">
                        <x-jet-label for="password" /><small class="text-red-500">* </small> Contraseña
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                            autocomplete="new-password" />
                        @error('password')
                            <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" /><small class="text-red-500">* </small>
                    Confirmar Contraseña
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('Acepto los :terms_of_service y :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terminos del Servicio') . '</a>',
                                        'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Politica de Privacidad') . '</a>',
                                    ]) !!}
                                </div>
                            </div>
                            @error('terms')
                            <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-blue-600" href="{{ route('login') }}">
                        {{ __('Ya estas registrado ?') }}
                    </a>

                    <a class="inline-flex items-center ml-2 px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                        type="submit" href="{{ route('home') }}">
                        cancelar
                    </a>
                    <x-jet-button class="ml-2">
                        {{ __('Registrarme') }}
                    </x-jet-button>


                </div>
            </form>
    </div>
    </x-jet-authentication-card>

</x-guest-layout>
    <br>
</x-app-layout>
