<x-app-layout>

    @php
        //en mi blade pasarle una ruta absoluta
        // SDK de Mercado Pago
        require base_path('/vendor/autoload.php');
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->title = $dictation->courses->name;
        $item->quantity = 1;
        $item->unit_price = $dictation->courses->price;

        // Me redireccionaria de acuerdo al estado del pago
        $preference->back_urls = array(
        "success" => route('courses.pay', $dictation),
        "failure" => "http://www.tu-sitio/failure",
        "pending" => route('courses.pending', $dictation)
        );
        // con esto redirecciona a la pagina automaticamente
        $preference->auto_return = "approved";

        $preference->items = array($item);
        $preference->save();
    @endphp

    @if (!Auth::check())
        {{-- MIGAS DE PAN --}}
         <nav>
            <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">

                <li class="px-2"><a href="{{ route('home') }}" class="no-underline text-indigo">Inicio</a></li>
                <li>/</li>

                <li class="px-2"><a href="{{ route('courses.index') }}" class="no-underline text-indigo">Cursos</a>
                </li>
                <li>/</li>
                <li class="px-2"><a href="#" class="no-underline text-indigo">Detalles</a>
                </li>
                <li>/</li>


                <li class="px-2 text-gray-500">Formulario de Registro</li>

            </ol>
        </nav>
        {{-- FIN MIGAS DE PAN --}}
    @endif

    {{-- //-------------------------------------------------------------------------------------------------------------
// -----------------  *******************************   //////////////////////////////////// --------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------- --}}

    {{-- //-------------------------------------------------------------------------------------------------------------
// -----------------  *******************************   //////////////////////////////////// --------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------- --}}

    @if (!Auth::check())

        <div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto  ">

            {{-- COL 1 --}}
            <div class="grid grid-cols-1 md:col-span-2 lg:col-span-2">

                <div class="container mx-auto shadow-md rounded px-8 pb-8 mb-4 flex flex-col my-2"><br>

                    {{-- FORMULARIO DE REGISTRO SI NO ESTA LOGUEADO --}}
                    <div class="bg-black">
                        <x-jet-authentication-card>
                            <x-slot name="logo">
                                <div class="-m-2 text-center">
                                    <div
                                        class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                                        <span
                                            class="inline-flex bg-pink-600 text-white rounded-full h-12 px-3 justify-center items-center">Atencion
                                        </span>
                                        <p class="inline-flex text-lg font-bold px-2">Deberas CREAR una cuenta para poder inscribirte a un curso.</p>
                                    </div>
                                </div>
                            </x-slot>
                            <h1 class="bg-gray-200 rounded-full px-2 mt-2 py-2 text-2xl font-bold">Formulario de
                                Registro</h1>
                            <br>
                            <hr><br>

                            {{-- <x-jet-validation-errors /> --}}
                            <form method="POST" autocomplete="off" action="{{ route('register') }}">
                                @csrf

                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label for="name" /><small class="text-red-500">* </small> Nombre /s
                                        <x-jet-input id="name" class="block mt-1 w-full" placeholder="Estaban"
                                            type="text" name="name" :value="old('name')" />
                                        @error('name')
                                            <small class="text-red-600">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <x-jet-label for="last_name" /><small class="text-red-500">* </small> Apellido
                                        /s
                                        <x-jet-input id="last_name" class="block mt-1 w-full" placeholder="Lamonte"
                                            type="text" name="last_name" :value="old('last_name')" />
                                        @error('last_name')
                                            <small class="text-red-600">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-4">

                                    <x-jet-label for="phone" /><small class="text-red-500">* </small> Telefono Celular
                                    <x-jet-input id="phone" class="block mt-1 w-full" placeholder="Ej: 297111222"
                                        pattern="[0-9]{10}" maxlength="10" type="tel" name="phone"
                                        :value="old('phone')" /><small><i>Ingrese un numero que no conternga el prefijo
                                            0 y 15</i> </small>
                                    <br>
                                    @error('phone')
                                        <small class="text-red-600">{{ $message }}</small>
                                    @enderror

                                </div>


                                <div class="mt-4">
                                    <x-jet-label for="expire_license" /><small class="text-red-500">*
                                    </small>Vencimiento de Licencia Nacional de Conducir
                                    <x-jet-input id="expire_license" class="block mt-1 w-full" min="2021-07-30"
                                        type="date" name="expire_license  " :value="old('expire_license')" />
                                    @error('expire_license')
                                        <small class="text-red-600">{{ $message }}</small>
                                    @enderror
                                </div>
                                <br>


                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label for="email" /><small class="text-red-500">* </small> Email
                                        <x-jet-input id="email" placeholder="example@gmail.com"
                                            class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                                        @error('email')
                                            <small class="text-red-600">{{ $message }}</small>
                                        @enderror

                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <x-jet-label for="password" /><small class="text-red-500">* </small> Contraseña
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" autocomplete="new-password" />
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
                                        </x-jet-label>
                                    </div>
                                @endif

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-blue-600"
                                        href="{{ route('login') }}">
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
                    {{-- FORMULARIO DE REGISTRO --}}

                </div>

            </div>

            {{-- COL 2 --}}
            <div class="grid grid-cols-1 md:col-span-2 lg:col-span-1">

                <div class="container mx-auto shadow-md rounded px-8 pb-8 mb-4 flex flex-col my-2"><br>

                    {{-- CARD DETALLES DE INSCRIPCION --}}
                    <div class="bg-white shadow-md rounded px-4  pb-8 mb-4 flex flex-col my-2">
                        <div class="container mx-auto"><br>
                            <h1 class="bg-gray-200 rounded-full px-2 mt-2 py-2 text-2xl font-bold">Detalle de la
                                Inscripción
                            </h1><br>
                            <hr><br>

                            <p class="px-4 py-2 text-lg"><strong>Curso: </strong> {{ $dictation->courses->name }}
                            </p>
                            <p class="px-4 py-2"><strong>Fecha: </strong>
                                {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }}</p>

                            <p class="px-4 py-2"><strong>Ciudad: </strong>{{ $dictation->places->city->name }}</p>

                            <p class="px-4 py-2"><strong>Instructor:
                                </strong>{{ $dictation->courses->teachers->name }}
                            </p>
                            <br><br>

                            <p class="bg-yellow-500 text-center text-white font-bold py-2 px-4 rounded">
                                ARS ${{ $dictation->courses->price }}
                            </p><br>

                            {{-- <p class="px-4 py-2"><strong>Clienta: </strong>{{$userName}}{{$usersLastName}}</p> --}}

                        </div>
                    </div>

                </div>

            </div>

        </div>


            {{-- //-------------------------------------------------------------------------------------------------------------
// -----------------  *******************************   //////////////////////////////////// --------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------- --}}

        @elseif(Auth::check())

        {{--MIGAS DE PAN--}}
        <nav>
            <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">

                <li class="px-2"><a href="{{ route('home') }}" class="no-underline text-indigo">Inicio</a></li>
                <li>/</li>

                <li class="px-2"><a href="{{ route('courses.index') }}" class="no-underline text-indigo">Cursos</a>
                </li>
                <li>/</li>

                <li class="px-2"><a href="#" class="no-underline text-indigo">Dictados</a>
                </li>
                <li>/</li>

                <li class="px-2 text-gray-500">Medios de Pago</li>

            </ol>
        </nav>
        {{--FIN MIGAS DE PAN--}}


        {{-- PROCESO DE INSCRIPCION --}}
        <div class="max-w-xl mx-auto my-4 border-b-2 pb-4">
            <div class="flex pb-3">
                <div class="flex-1">
                </div>

                <div class="flex-1">
                    <div class="w-10 h-10 bg-green-400 mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-black text-center w-full"><i
                                class="fa fa-check w-full fill-current white">1</i></span>
                    </div>
                </div>


                <div class="w-1/6 align-center items-center align-middle content-center flex">
                    <div class="w-full rounded items-center align-middle align-center flex-1">
                        <div class="bg-green-400 text-xs leading-none py-1 text-center text-gray-400 rounded"></div>
                    </div>
                </div>


                <div class="flex-1">
                    <div class="w-10 h-10 bg-green-400 mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-black text-center w-full"><i
                                class="fa fa-check w-full fill-current white">2</i></span>
                    </div>
                </div>

                <div class="w-1/6 align-center items-center align-middle content-center flex">
                    <div class="w-full bg-gray-400 rounded items-center align-middle align-center flex-1">
                        <div id="barra"
                            class="bg-green-400 text-xs leading-none py-1 text-center text-gray-400 rounded "
                            style="width: 25%"></div>
                    </div>
                </div>

                <div class="flex-1">
                    <div id="circulo"
                        class="w-10 h-10 bg-gray-400 mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-black text-center w-full"><i
                                class="fa fa-check w-full fill-current white">3</i></span>
                    </div>
                </div>

                <div class="flex-1">
                </div>
            </div>

            <div class="flex text-xs content-center text-center">


                <div class="w-1/3">
                    Seleccionar Fecha
                </div>

                <div class="w-1/3">
                    Medio de Pago
                </div>

                <div class="w-1/3">
                    Confirmar Pago
                </div>
            </div>
        </div>
        {{-- FIN PROCESO DE INSCRIPCION --}}


        {{-- //---------------------------------------- GRID -----------------------------------------------------------------------}}
        {{-- //---------------------------------------- GRID -----------------------------------------------------------------------}}

        <div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto  ">

            {{-- ************* COL 1 --}}
            {{--<div class="grid grid-cols-1 md:col-span-3 lg:col-span-2">
                <div class="bg-white shadow-md rounded px-4  pb-8 mb-4 flex flex-col my-2">
                    <div class="container mx-auto">
                        <br>
                        --}}{{-- CARD MEDIO DE PAGO --}}{{--
                        <h1 class="bg-gray-200 rounded-full px-2 py-2 text-2xl font-bold">Seleccionar Medio de Pago</h1>
                        <br>
                        <div class="cho-container">
                        </div>
                        --}}{{--<form action="{{ route('form', $dictation) }}" method="POST">
                            @csrf

                            <hr>
                            <p class="mt-1">Seleccione un metodo de pago por favor para poder completar la transaccion
                            </p>
                            <p>En el caso de seleccionar efectivo recuerda que deberas acercarte a Mariano Moreno 1400 -
                                Caleta Olivia.</p><br>

                            @if ($errors->any())

                                @foreach ($errors->all() as $error)
                                    <p class=" text-red-500">* {{ $error, '<br>' }}</p>
                                @endforeach

                            @endif
                            --}}{{----}}{{-- @livewire('check-method')<br> --}}{{----}}{{--

                            --}}{{----}}{{-- MEDIO DE PAGO --}}{{----}}{{----}}{{----}}{{--
                            <input type="radio" name="payment_method" value="tarjeta">
                            <label for="tarjeta" class="text-xl">Tarjeta de Debito / Credito</label><br>

                            <input type="radio" name="payment_method" value="transferencia">
                            <label for="transferencia" class="text-xl">Transferencia Bancaria</label><br>

                            <input type="radio" name="payment_method" value="efectivo">
                            <label for="efectivo" class="text-xl">Efectivo</label><br><br>--}}{{----}}{{--

                            <div class="flex justify-content-md-start">
                                --}}{{----}}{{--<button
                                    class="bg-blue-500 pagar form-exit hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                    Confirmar
                                </button>--}}{{----}}{{--

                            </div>

                        </form>--}}{{--
                        --}}{{-- FIN CARD MEDIO DE PAGO --}}{{--
                    </div>
                </div>
            </div>--}}


            {{-- ************* COL 2 --}}
            <div class="grid grid-cols-1 md:col-span-3 lg:col-span-1">
                <div class="bg-white shadow-md rounded px-4  pb-8 mb-4 flex flex-col my-2">
                    <div class="container mx-auto">
                        <br>
                        <h1 class="bg-gray-200 rounded-full px-2 py-2 text-2xl font-bold">Detalle de la Inscripción
                        </h1><br>
                        <hr><br>

                        <p class="px-4 py-2 text-lg"><strong>Curso: </strong> {{ $dictation->courses->name }}
                        </p>
                        <p class="px-4 py-2"><strong>Fecha: </strong>
                            {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }}</p>
                        <p class="px-4 py-2"><strong>Ciudad: </strong>{{ $dictation->places->city->name }}</p>
                        <br>

                        <p class="bg-yellow-500 text-center text-white font-bold py-2 px-4 rounded">
                            TOTAL : ARS ${{ number_format($dictation->courses->price, 2) }}
                        </p><br>
                        <div class="cho-container">
                        </div>
                        {{--<div class="cho-container">
                        </div>--}}
                        {{-- <p class="px-4 py-2"><strong>Clienta: </strong>{{$userName}}{{$usersLastName}}</p> --}}

                    </div>
                </div>
            </div>

        @endif
        </div>
        {{-- //---------------------------------------- FIN  GRID -----------------------------------------------------------------------}}
        {{-- //---------------------------------------- FIN  GRID -----------------------------------------------------------------------}}


        {{--// SDK MercadoPago.js V2--}}
        <script src="https://sdk.mercadopago.com/js/v2"></script>

        <script>
            // Agrega credenciales de SDK
            const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
                locale: 'es-AR'
            });

            // Inicializa el checkout
            mp.checkout({
                preference: {
                    id: '{{$preference->id}}'
                },
                render: {
                    container: '.cho-container', // Indica dónde se mostrará el botón de pago
                    label: 'Pagar', // Cambia el texto del botón de pago (opcional)
                }
            });
        </script>

</x-app-layout>
