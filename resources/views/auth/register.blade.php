<x-guest-layout>
    <div class="bg-black">
    <x-jet-authentication-card>
        <x-slot name="logo"><br>
            <x-jet-authentication-card-logo />
        </x-slot>
        
        <h1 class="text-2xl mb-4 text-center text-black font-semibold">Formulario de Registro</h1><hr><br>

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" autocomplete="off" action="{{ route('register') }}">
            @csrf

            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-jet-label for="name" /><small class="text-red-500 text-xl font-bold">* </small> Nombre /s
                    <x-jet-input id="name" class="block mt-1 w-full" placeholder="Estaban" type="text" name="name" :value="old('name')"
                     />
                </div>
                <div class="md:w-1/2 px-3">
                    <x-jet-label for="last_name" /><small class="text-red-500 text-xl font-bold">* </small> Apellido /s
                    <x-jet-input id="last_name" class="block mt-1 w-full" placeholder="Lamonte" type="text" name="last_name"
                        :value="old('last_name')" />
                </div>
            </div>

            <div class="mt-4">
                
                    <x-jet-label for="phone" /><small class="text-red-500 text-xl font-bold">* </small>Telefono Celular
                    <x-jet-input id="phone" class="block mt-1 w-full" placeholder="Ej: 297111222"
                    pattern="[0-9]{10}" maxlength="10" type="tel" name="phone"
                        :value="old('phone')" /><small>Formato: 10 digitos</small><br>
            
            </div>

{{-- 
            <div class="mt-4">
                <x-jet-label for="number_license" />Numero de Licencia Nacional de Conducir
                <x-jet-input id="number_license" class="block mt-1 w-full" placeholder="Ej: 33111222" pattern="[0-9]{8}"
                    type="tel" name="number_license  " :value="old('number_license')" />
                    <small><i>El formato debe ser de 8 digitos.</i></small><br>
            </div> --}}
            <div class="mt-4">
                <x-jet-label for="expire_license" /><small class="text-red-500 text-xl font-bold">* </small>Vencimiento de Licencia Nacional de Conducir
                <x-jet-input id="expire_license" class="block mt-1 w-full" min="2021-07-30" type="date" name="expire_license  " :value="old('expire_license')"  />
            </div>
            <br>


            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-jet-label for="email"/><small class="text-red-500 text-xl font-bold">* </small> Email
                    <x-jet-input id="email" placeholder="example@gmail.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                </div>
                <div class="md:w-1/2 px-3">
                    <x-jet-label for="password" /><small class="text-red-500 text-xl font-bold">* </small> Contraseña
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                        autocomplete="new-password" />
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" /><small class="text-red-500 text-xl font-bold">* </small> Confirmar Contraseña
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
