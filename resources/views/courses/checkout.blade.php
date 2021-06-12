<x-app-layout>

    @if (!Auth::check())
        {{-- MIGAS DE PAN --}}
        {{-- <script>
            alert("Deberas registrarte para poder inscribirte al Curso");

        </script> --}}

        <nav>
            <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">

                <li class="px-2"><a href="{{ route('home') }}" class="no-underline text-indigo">Inicio</a></li>
                <li>/</li>

                <li class="px-2"><a href="{{ route('courses.index') }}" class="no-underline text-indigo">Cursos</a>
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

                            </x-slot>
                            <h1 class="text-2xl mb-4 text-black text-center font-semibold">Formulario de Registro</h1>
                            <hr><br>

                            <x-jet-validation-errors />
                            <form method="POST" autocomplete="off" action="{{ route('register') }}">
                                @csrf

                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label for="name" />Nombre
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                            :value="old('name')" />
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <x-jet-label for="last_name" />Apellido
                                        <x-jet-input id="last_name" class="block mt-1 w-full" type="text"
                                            name="last_name" :value="old('last_name')" />
                                    </div>
                                </div>



                                <div class="mt-4">
                                    <x-jet-label for="number_license" />Numero de Licencia Nacional de Conducir
                                    <x-jet-input id="number_license" class="block mt-1 w-full"
                                        placeholder="Ej: 33111222" pattern="[0-9]{8}" type="tel" name="number_license  "
                                        :value="old('number_license')" />
                                    <small class="text-gray-400"><i>El formato debe ser de 8 digitos.</i></small><br>

                                </div>
                                <div class="mt-4">
                                    <x-jet-label for="expire_license" />Fecha de Vencimiento Licencia Nacional de
                                    Conducir
                                    <x-jet-input id="expire_license" class="block mt-1 w-full" min="2021-07-30"
                                        type="date" name="expire_license  " :value="old('expire_license')" />
                                </div>
                                <br>


                                <div class="-mx-3 md:flex mb-6">
                                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                        <x-jet-label for="email" />Email
                                        <x-jet-input id="email" placeholder="example@gmail.com"
                                            class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                                    </div>
                                    <div class="md:w-1/2 px-3">
                                        <x-jet-label for="password" />Contraseña
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" autocomplete="new-password" />
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password_confirmation" />Confirmar Contraseña
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
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('login') }}">
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

            {{-- COL 2 --}}
            <div class="grid grid-cols-1 md:col-span-2 lg:col-span-1">

                <div class="container mx-auto shadow-md rounded px-8 pb-8 mb-4 flex flex-col my-2"><br>

                    {{-- CARD DETALLES DE INSCRIPCION --}}
                    <div class="bg-white shadow-md rounded px-4  pb-8 mb-4 flex flex-col my-2">
                        <div class="container mx-auto">
                            <h1 class="bg-gray-200 rounded-full px-2 py-2 text-2xl font-bold">Detalle de la Inscripción
                            </h1><br>
                            <hr><br>

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
                                </strong>{{ $dictation->courses->teachers->name }}
                            </p>
                            <br><br>

                            <p class="bg-gray-500 text-center text-white font-bold py-2 px-4 rounded">
                                ARS ${{ $dictation->courses->price }}
                            </p><br>

                            {{-- <p class="px-4 py-2"><strong>Clienta: </strong>{{$userName}}{{$usersLastName}}</p> --}}

                        </div>
                    </div>

                </div>

            </div>

        </div>

    @elseif(Auth::check())


        <nav>
            <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">

                <li class="px-2"><a href="{{ route('home') }}" class="no-underline text-indigo">Inicio</a></li>
                <li>/</li>

                <li class="px-2"><a href="{{ route('courses.index') }}" class="no-underline text-indigo">Cursos</a>
                </li>
                <li>/</li>

                <li class="px-2 text-gray-500">Medios de Pago</li>

            </ol>
        </nav>

        {{-- PROCESO DE INSCRIPCION TIPO MIGAS --}}
        <div class="max-w-xl mx-auto my-4 border-b-2 pb-4">
            <div class="flex pb-3">
                <div class="flex-1">
                </div>

                <div class="flex-1">
                    <div class="w-10 h-10 bg-green-400 mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-black text-center w-full"><i class="fa fa-check w-full fill-current white">1</i></span>
                    </div>
                </div>


                <div class="w-1/6 align-center items-center align-middle content-center flex">
                    <div class="w-full bg-  red-400 rounded items-center align-middle align-center flex-1">
                        <div class="bg-green-400 text-xs leading-none py-1 text-center text-gray-400 rounded"></div>
                    </div>
                </div>


                <div class="flex-1">
                    <div class="w-10 h-10 bg-green-400 mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-black text-center w-full"><i class="fa fa-check w-full fill-current white">2</i></span>
                    </div>
                </div>

                <div class="w-1/6 align-center items-center align-middle content-center flex">
                    <div class="w-full bg-gray-400 rounded items-center align-middle align-center flex-1">
                        <div id="barra" class="bg-green-400 text-xs leading-none py-1 text-center text-gray-400 rounded " style="width: 25%"></div>
                    </div>
                </div>

                <div class="flex-1">
                    <div id="circulo" class="w-10 h-10 bg-gray-400 mx-auto rounded-full text-lg text-white flex items-center">
                        <span class="text-black text-center w-full"><i class="fa fa-check w-full fill-current white">3</i></span>
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
        {{-- FIN PROCESO DE INSCRIPCION TIPO MIGAS --}}


        <div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto  ">

            {{-- ************* COL 1 --}}
            <div class="grid grid-cols-1 md:col-span-3 lg:col-span-2">
                <div class="bg-white shadow-md rounded px-4  pb-8 mb-4 flex flex-col my-2">

                    {{-- CARD MEDIO DE PAGO --}}
                    <h1 class="bg-gray-200 rounded-full px-2 py-2 text-2xl font-bold">Seleccionar Medio de Pago</h1>

                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit quo molestiae quae
                        optio, nam qui nobis perspiciatis consequatur, ipsam provident minus voluptate et adipisci id
                        porro dolor deserunt quia laudantium.</p>
                    <br>

                    <form action="{{ route('form', $dictation) }}" method="POST">
                        @csrf

                        <hr>
                        <p class="mt-1">Seleccione un metodo de pago por favor para poder completar la transaccion</p>
                        <p>En el caso de seleccionar Efectivo recuerda que podras descargar la factura en tu perfil >
                            mis inscripciones</p><br>

                        @if ($errors->any())

                            @foreach ($errors->all() as $error)

                                <p class=" text-red-500">* {{ $error, '<br>' }}</p>
                            @endforeach

                        @endif
                        {{-- @livewire('check-method')<br> --}}
                        <br>

                        {{-- MEDIO DE PAGO --}}
                        <input type="radio" name="payment_method" value="tarjeta">
                        <label for="tarjeta" class="text-xl">Tarjeta de Debito / Credito</label><br>

                        <input type="radio" name="payment_method" value="transferencia">
                        <label for="transferencia" class="text-xl">Transferencia Bancaria</label><br>

                        <input type="radio" name="payment_method" value="efectivo">
                        <label for="efectivo" class="text-xl">Efectivo</label><br><br>



                        <div class="flex justify-center">
                            <button
                                class="bg-blue-500 pagar form-exit hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                PAGAR
                            </button>
                        </div>

                    </form>
                    {{-- FIN CARD MEDIO DE PAGO --}}

                </div>
            </div>
            {{-- ************* COL 2 --}}
            <div class="grid grid-cols-1 md:col-span-3 lg:col-span-1">
                <div class="bg-white shadow-md rounded px-4  pb-8 mb-4 flex flex-col my-2">
                    <div class="container mx-auto">
                        <h1 class="bg-gray-200 rounded-full px-2 py-2 text-2xl font-bold">Detalle de la Inscripción
                        </h1><br>
                        <hr><br>

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
                            </strong>{{ $dictation->courses->teachers->name }}
                        </p>
                        <br><br>

                        <p class="bg-gray-500 text-center text-white font-bold py-2 px-4 rounded">
                            ARS ${{ $dictation->courses->price }}
                        </p><br>

                        {{-- <p class="px-4 py-2"><strong>Clienta: </strong>{{$userName}}{{$usersLastName}}</p> --}}

                    </div>
                </div>
            </div>

    @endif

    </div>


</x-app-layout>
