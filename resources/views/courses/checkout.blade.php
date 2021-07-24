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
        $preference->back_urls = [
            'success' => route('courses.pay', $dictation),
            'failure' => '',
            'pending' => route('courses.pending', $dictation),
        ];
        // con esto redirecciona a la pagina automaticamente
        $preference->auto_return = 'approved';

        $preference->items = [$item];
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
                @foreach($courses as $course)
                    <p>{{$course->id}}</p>
                @endforeach

                <li>
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

        <br>
        <!-- component -->
        <main class="w-full flex justify-center">
            <div class="flex flex-col md:w-2/5 p-4 mt-2 space-y-5 rounded-xl border border-black bg-white shadow-md">
                <h3 class="text-grey-dark text-2xl px-6 text-center mb-4">
                    ¡Hola! Para inscribirte, ingresá a tu cuenta</h3>

                <a href="{{ route('register') }}"><button
                        class="bg-green-400 text-white px-3 py-2 rounded w-full mt-4">Soy nuevo</button></a>
                <a href="{{ route('login') }}"><button
                        class="hover:bg-gray-100 text-blue-600 font-bold px-3 py-2 rounded w-full mt-4">Ya tengo una
                        cuenta</button></a>

            </div>
        </main>



        {{-- //-------------------------------------------------------------------------------------------------------------
// -----------------  *******************************   //////////////////////////////////// --------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------- --}}

    @elseif(Auth::check())

        {{-- MIGAS DE PAN --}}
        <nav>
            <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">

                <li class="px-2"><a href="{{ route('home') }}" class="no-underline text-indigo">Inicio</a></li>
                <li>/</li>

                <li class="px-2"><a href="{{ route('courses.index') }}" class="no-underline text-indigo">Cursos</a>
                </li>
                <li>/</li>

                @foreach($courses as $course)

                    <li class="px-2"><a href="{{route('courses.show', $course)}}" class="no-underline text-indigo">Manejo Defensivo</a>
                    </li>
                @endforeach
                <li>/</li>

                <li class="px-2 text-gray-500">Pago</li>

            </ol>
        </nav>
        {{-- FIN MIGAS DE PAN --}}

        {{-- PROCESO DE INSCRIPCION --}}
        <div class="max-w-xl mx-auto my-4 border-b-2 pb-4">
            <div class="flex pb-3">
                <div class="flex-1">
                    <div class="w-10 h-10 mx-auto rounded-full text-lg text-white flex items-center">
                    <span class="text-black text-center w-full"><a href="{{route('courses.show', $course)}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
</svg></a> </span>
                    </div>
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

                <div class="w-1/2">
                    Seleccionar Fecha
                </div>

                <div class="w-1/2">
                    Realizar Pago
                </div>

                <div class="w-1/2">
                    Finalizar
                </div>
            </div>
        </div>
        {{-- FIN PROCESO DE INSCRIPCION --}}


        {{-- //---------------------------------------- GRID --------------------------------------------------------------------- --}}
        {{-- //---------------------------------------- GRID --------------------------------------------------------------------- --}}



        <div class="container mx-auto px-4 sm:px-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 overflow-x-auto">
                <div class="bg-white shadow-md rounded px-4  pb-8 mb-4 flex flex-col my-2">
                    <h1 class="rounded-full px-2 py-2 text-center text-2xl font-bold">Detalles de Inscripción</h1><br><hr>

                    <div class="container mx-auto px-4 sm:px-8">
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                            <tr>
                                
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300  font-bold text-black uppercase tracking-wider">
                                    Curso
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300  font-bold text-black uppercase tracking-wider">
                                    Fecha
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300 font-bold text-black uppercase tracking-wider">
                                    Ciudad
                                </th>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300  font-bold text-black uppercase tracking-wider">
                                    Total
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b text-center border-gray-200 bg-white text-sm">{{ $dictation->courses->name }}
                                </td>

                                <td class="px-5 py-5 border-b text-center border-gray-200 bg-white text-sm">{{ $dictation->date->format('d / m / Y') }}
                                </td>
                                <td class="px-5 py-5 border-b text-center border-gray-200 bg-white text-sm">{{ $dictation->places->city->name }}
                                </td>

                                <td class="px-5 py-5 border-b text-center border-gray-200 bg-white text-sm">ARS $ {{ number_format($dictation->courses->price, 2) }}
                                </td>
                            </tbody>
                        </table>

                            </div>
                            <div class=" mt-4 text-right cho-container">

                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>



    @endif

    {{-- //---------------------------------------- FIN  GRID --------------------------------------------------------------------- --}}
    {{-- //---------------------------------------- FIN  GRID --------------------------------------------------------------------- --}}


    {{-- // SDK MercadoPago.js V2 --}}
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
            locale: 'es-AR'
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: '{{ $preference->id }}'
            },
            render: {
                container: '.cho-container', // Indica dónde se mostrará el botón de pago
                label: 'Pagar', // Cambia el texto del botón de pago (opcional)
            }
        });

    </script>

</x-app-layout>
