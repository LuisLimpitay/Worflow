<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" autocomplete="off" action="{{ route('register') }}">
            @csrf

            <div  class="mt-4">
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus  />
            </div>

            <div  class="mt-4">
                <x-jet-label for="last_name" value="{{ __('Apellido') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="number_license" value="{{ __('Numero de Licencia de Conducir') }}" />
                <x-jet-input id="number_license" class="block mt-1 w-full" placeholder="Ej: 33111222" pattern="[0-9]{8}"  type="tel" name="number_license  " :value="old('number_license')" required />
                <small>El formato debe ser de 8 digitos.</small><br><br>
            </div>
           

            <div class="mt-4">
                <x-jet-label for="expire_license" value="{{ __('Vencimiento Licencia de Conducir') }}" />
                <x-jet-input id="expire_license" class="block mt-1 w-full" min="2021-07-30" type="date" name="expire_license  " :value="old('expire_license')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms"/>

                        <div class="ml-2">
                            {!! __('Acepto los :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terminos del Servicio').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Politica de Privacidad').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
             @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya estas registrado ?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrarme') }}
                </x-jet-button>
            </div>
        </form>

    </x-jet-authentication-card>

</x-guest-layout>
