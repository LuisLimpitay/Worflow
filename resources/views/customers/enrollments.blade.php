<x-app-layout>


    {{-- MIGAS DE PAN --}}
    <nav>
        <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">
            <li class="px-2"><a href="{{ route('home') }}" class="no-underline text-indigo">Inicio</a></li>
            <li>/</li>
            <li class="px-2 text-gray-900"><a href="{{ route('profile.show') }}"
                    class="no-underline text-indigo">Perfil</a></li>
            <li>/</li>
            <li class="px-2 text-gray-500">Mis Inscripciones</li>
        </ol>
    </nav>




    {{-- $dictation->pivot->status == 'aprobado' --}}
    <h1 class="px-3 text-4xl text-center">Tus Inscripciones</h1><br>
    <hr>
    {{-- FIN MIGAS DE PAN --}}



    {{-- CARD DE MIS INSCRIPCIONES --}}
    @if ($users->dictations->count())

        @foreach ($users->dictations as $dictation)

            @if ($dictation->pivot->status == 'aprobado')

                <div class="max-w-md mt-8  bg-white mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl">

                    <div class=" text-right px-3 pt-3 py-2 text-white bg-gray-500">
                        <a href="{{ route('inscripcion', auth()->user()->id) }}" target="_blank">Descargar</a>
                    </div>

                    <div class="md:flex">
                        <div class="md:flex-shrink-0">
                            <img class="h-48 w-full object-cover md:h-full md:w-48"
                                src="https://images.pexels.com/photos/1203768/pexels-photo-1203768.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="Man looking at item at a store">
                        </div>
                        <div class="p-8">

                            <div class="uppercase tracking-wide text-2xl text-indigo-500 font-semibold">
                                {{ $dictation->courses->name }}
                            </div>

                            <p class="mt-2 text-xl text-xl text-gray-500"><b>Cliente : </b>{{ $users->last_name }},
                                {{ $users->name }} </p>
                            <p class="mt-2 text-xl text-gray-500"><b>Fecha :
                                </b>{{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }} <b>Hora</b>
                                {{ $dictation->time }}a.m </p>

                            <p class="mt-2 text-xl text-gray-500"><b>Lugar : </b>{{ $dictation->places->name }} </p>
                            <p class="mt-2 text-xl text-gray-500"><b>Direccion :
                                </b>{{ $dictation->places->address_street }}
                                {{ $dictation->places->address_number }} </p>
                            <p class="mt-2 text-xl text-gray-500"><b>Ciudad: </b>{{ $dictation->places->city }} </p>
                            <p class="mt-2 text-xl text-gray-500"><b>Cupos: </b>{{ $dictation->pivot->quantity }}
                                Lugar </p>
                            <br>
                            <p class="mt-2 text-gray-900"><i>- Recuerde asistir con su Licencia Nacional de Conducir</i>
                            </p>
                            <hr><br>
                            <p class="text-gray-500 my-1">
                        Somos Workflow, Somos Manejo Defensivo.
                    </p>
                        </div>

                    </div>


                @else
                <div class="max-w-lg w-full container mx-auto text-center rounded-lg shadow-lg p-4">
                    <div class=" text-right px-3 pt-3 py-2 text-white bg-gray-500">
                        <a href="{{ route('inscripcion', auth()->user()->id) }}" target="_blank">Descargar</a>
                    </div>
                    <h3 class="font-semibold bg-red-200 text-2xl tracking-wide">Tu pago esta pendiente
                    </h3><br>
                    <p class="text-gray-500 text-left my-1">
                        Deberas realizar el pago en cualquier sucursal de rapi pago o pago facil para poder visualizar el comprobante de tu inscripcion
                    </p><br><br>
                    <hr>
                    <p class="text-gray-500 my-1">
                        Somos Workflow, Somos Manejo Defensivo.
                    </p>
        
                </div>



                
            @endif

        @endforeach


    @else
        <br>
        <div class="max-w-lg w-full container mx-auto text-center rounded-lg shadow-lg p-4">
            <h3 class="font-semibold bg-red-200 text-2xl tracking-wide">No tienes inscripciones!
            </h3><br>
            <p class="text-gray-500 text-left my-1">
                Uno de los motivos por lo que todavia no puedes visualizar tu inscripcion puede ser por que
                seleccionaste como medio de pago "Pago en efectivo". Una vez que lo realices podras visualizar los
                detalles de tu inscripcion.
            </p><br>
            <hr>
            <p class="text-gray-500 my-1">
                Somos Workflow, Somos Manejo Defensivo.
            </p>

        </div>

    @endif
    </div>



</x-app-layout>
