<x-app-layout>
    <br>
    @if (Auth::check())
        <div
            class="container mx-auto justify-items-center grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">


            <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-green-300 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-4">
                <div class="flex flex-col justify-center">
                    <p class="text-gray-900 dark:text-gray-300 font-semibold">Paso 1: </p>

                    <p class="text-black dark:text-gray-100 text-justify font-semibold">Completado</p>
                </div>
            </div>
            <!-- END SMALL CARD ROUNDED -->

            <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-green-300 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-4">
                <div class="flex flex-col justify-center">
                    <p class="text-gray-900 dark:text-gray-300 font-semibold">Paso 2</p>
                    <p class="text-black dark:text-gray-100 text-justify font-semibold">Método de Pago </p>
                </div>
            </div>
            <!-- END SMALL CARD ROUNDED -->
            <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-red-800 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-2">
                <div class="flex flex-col justify-center">
                    <p class="text-gray-400 dark:text-gray-300 font-semibold">Paso 3</p>
                    <p class="text-gray-400 dark:text-gray-100 text-justify font-semibold">Confirmar Pago</p>
                </div>
            </div>
            <!-- END SMALL CARD ROUNDED --->

        </div>
    @endif


    {{-- //-------------------------------------------------------------------------------------------------------------
// -----------------   GRID 1 SI NO ESTA REGISTRADO    --------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------- --}}
    <div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto  ">

        @if (!Auth::check())
            <div class="grid grid-cols-1 md:col-span-2 lg:col-span-2">

                <div class="container mx-auto shadow-md rounded px-8 pb-8 mb-4 flex flex-col my-2"><br>

                    {{-- FORMULARIO DE REGISTRO SI NO ESTA LOGUEADO --}}
                    
                        <div class="bg-black">
                        <x-jet-authentication-card>
                            <x-slot name="logo">
                    
                            </x-slot>
                            <h1 class="text-2xl mb-4 text-black text-center font-semibold">Formulario de Registro</h1><hr><br>
                    
                            <x-jet-validation-errors />
                            <form method="POST" autocomplete="off" action="{{ route('register') }}">
                                @csrf
                    
                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label for="name" />Nombre
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                         />
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <x-jet-label for="last_name"/>Apellido
                                        <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                            :value="old('last_name')" />
                                    </div>
                                </div>
                    
                    
                    
                                <div class="mt-4">
                                    <x-jet-label for="number_license" />Numero de Licencia Nacional de Conducir
                                    <x-jet-input id="number_license" class="block mt-1 w-full" placeholder="Ej: 33111222" pattern="[0-9]{8}"
                                        type="tel" name="number_license  " :value="old('number_license')" />
                                        <small class="text-gray-400"><i>El formato debe ser de 8 digitos.</i></small><br>

                                </div>
                                <div class="mt-4">
                                    <x-jet-label for="expire_license"/>Fecha de Vencimiento Licencia Nacional de Conducir
                                    <x-jet-input id="expire_license" class="block mt-1 w-full" min="2021-07-30" type="date" name="expire_license  " :value="old('expire_license')" />
                                </div>
                                <br>
                    
                    
                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label for="email"/>Email
                                        <x-jet-input id="email" placeholder="example@gmail.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <x-jet-label for="password"/>Contraseña
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                            autocomplete="new-password" />
                                    </div>
                                </div>
                    
                                <div class="mt-4">
                                    <x-jet-label for="password_confirmation"/>Confirmar Contraseña
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
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Ya estas registrado ?') }}
                                    </a>
                    
                                    <a class="inline-flex items-center ml-4 px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                                        type="submit" href="{{ route('courses.index') }}">
                                        cancelar
                                    </a>
                                    <x-jet-button class="ml-2">
                                        {{ __('Registrarme') }}
                                    </x-jet-button>
                    
                    
                                </div>
                            </form>
                        </div>
                        </x-jet-authentication-card>
                    {{-- FORMULARIO DE REGISTRO --}}
                        


                </div>

            </div>


            {{-- //-------------------------------------------------------------------------------------------------------------
    // -----------------   FIN GRID 1     --------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------- --}}




            {{-- //-------------------------------------------------------------------------------------------------------------
// -----------------   GRID 2 EMPIEZA ACA      --------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------- --}}

            <div class=" md:col-span-3 lg:col-span-1 px-8 py-6">

                <div class="container mx-auto"><br>

                    <div class="bg-white shadow-md rounded px-4 pt-6 pb-8 mb-4 flex flex-col my-2">

                        <h1 class="text-2xl mb-4 text-black font-semibold">Detalle de la Inscripción</h1>

                        <p class="px-4 py-2 text-lg"><strong>Curso: </strong> {{ $dictation->courses->name }}</p>
                        <p class="px-4 py-2"><strong>Fecha: </strong>
                            {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }}</p>
                        <p class="px-4 py-2"><strong>Hora: </strong>{{ $dictation->time }}</p>
                        <p class="px-4 py-2"><strong>Direccion: </strong>{{ $dictation->places->address_street }}
                            {{ $dictation->places->address_number }}</p>

                        <p class="px-4 py-2"><strong>Ciudad: </strong>{{ $dictation->places->city }}</p>

                        <p class="px-4 py-2"><strong>Instructor: </strong>{{ $dictation->courses->teachers->name }}
                        </p>
                        <br>
                        <p class="text-xl inline-block px-6 py-4 bg-red-400 text-white rounded-full  "><strong></strong>
                            ARS $ {{ $dictation->courses->price }}</p><br>
                        <br>
                    </div>

                </div>

                {{-- //-------------------------------------------------------------------------------------------------------------
// -----------------   SI ESTA LOGUEADO --->      --------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------- --}}
            @elseif(Auth::check())

                <div class="container mx-auto items-center"><br>

                    <div class="bg-white shadow-md rounded px-4 pt-6 pb-8 mb-4 flex flex-col my-2">

                        <h1 class="bg-gray-200 rounded-full px-2 py-2 text-2xl font-bold">Seleccionar Medio de Pago</h1>
                        <br>
                        

                        <form action="{{ route('form', $dictation) }}" method="POST">
                            @csrf
                            <br>
                            <hr>
                            {{-- @livewire('check-method')<br> --}}
                            
                            {{-- CANTIDAD DE RESERVA SIEMPRE SERA 1 --}}
                            <br><input type="hidden" name="quantity" value="1">

                            

                            {{-- MEDIO DE PAGO --}}
                            <input type="radio" name="payment_method" value="tarjeta" checked>
                            <label for="tarjeta">tarjeta</label><br>

                            <input type="radio" name="payment_method" value="transferencia">
                            <label for="transferencia">transferencia</label><br>

                            <input type="radio" name="payment_method" value="efectivo">
                            <label for="efectivo">efectivo</label><br>
                            <hr><br>

                            
                            <button class="btn btn-success">ENVIAR</button>
                        </form>
                        
                        <p class="px-4 py-2 text-center bg-red-500 text-lg font-bold"><strong>202</strong> ARS $
                            {{ $dictation->courses->price }}</p>

                        <div class="container mx-auto"><br>
                            <h1 class="bg-gray-200 rounded-full px-2 py-2 text-2xl font-bold">Detalle de Inscripción
                            </h1><br>

                            <p class="px-4 py-2 text-lg"><strong>Curso: </strong> {{ $dictation->courses->name }}
                            </p>
                            <p class="px-4 py-2"><strong>Fecha: </strong>
                                {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }}</p>
                            <p class="px-4 py-2"><strong>Hora: </strong>{{ $dictation->time }}</p>
                            <p class="px-4 py-2"><strong>Direccion:
                                </strong>{{ $dictation->places->address_street }}
                                {{ $dictation->places->address_number }}</p>

                            <p class="px-4 py-2"><strong>Ciudad: </strong>{{ $dictation->places->city }}</p>

                            <p class="px-4 py-2"><strong>Instructor:
                                </strong>{{ $dictation->courses->teachers->name }}</p>

                            {{-- <p class="px-4 py-2"><strong>Clienta: </strong>{{$userName}}{{$usersLastName}}</p> --}}

                        </div>
                    </div>

                </div>

        @endif

    </div>


    </div>

</x-app-layout>
