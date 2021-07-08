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
    {{-- FIN MIGAS DE PAN --}}


    {{-- CARD DE MIS INSCRIPCIONES --}}
    <h1 class="px-3 text-4xl text-center">Tus Inscripciones</h1><br>
    <hr>




    <!-- ************************************************************************************************************-->
    {{-- CARD DE CURSOS --}}
    <!-- ************************************************************************************************************-->
    <div class="container mx-auto py-8 ">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @if ($users->dictations->count())

                @foreach ($users->dictations as $dictation)
                    @if ($dictation->pivot->status == 'aprobado')
                        <div
                            class="max-w-md mt-8 text-center bg-white mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl">

                            <div class=" text-right text-xs px-2 pt-2 py-2 text-white bg-green-600">
                                <p>Fecha de Inscripcion :
                                    {{ \Carbon\Carbon::parse($dictation->created_at)->format('d M Y') }}
                                </p>
                                <a class="hover:underline" href="{{ route('inscripcion', $dictation->pivot->id) }}"
                                    target="_blank">Descargar Comprobante</a>
                            </div>

                            <div class="uppercase  mt-2 text-xl text-indigo-500 font-semibold">
                                {{ $dictation->courses->name }}
                            </div>

                            <p class="mt-2  text-black"><b>Cliente : </b>{{ $users->last_name }},
                                {{ $users->name }} </p>

                            <p class="mt-2 text-center text-black"><b>Fecha :
                                </b>{{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }} <b>Hora</b>
                                {{ $dictation->time }} a.m. </p>

                            <p class="mt-2 text-black"><b>Lugar : </b>{{ $dictation->places->name }} </p>
                            <p class="mt-2 text-black"><b>Direccion :
                                </b>{{ $dictation->places->address_street }}
                                {{ $dictation->places->address_number }} </p>
                            <p class="mt-2 text-black"><b>Ciudad: </b>{{ $dictation->places->city->name }} </p>
                            <p class="mt-2 text-black"><b>Cupos: </b>{{ $dictation->pivot->quantity }}</p>

                            <br>
                            <p class="mt-2 text-gray-900"><i>* Asisistir con la <b>Licencia Nacional
                                        de Conducir Vigente</b>.</i>
                            </p>
                        </div>

                    @else
                        <div class="max-w-md mt-8 bg-white mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl">

                            <div class=" text-right text-xs px-24 pt-2 py-2 text-white bg-red-400">
                                <p>Fecha de Inscripcion :
                                    {{ \Carbon\Carbon::parse($dictation->created_at)->format('d M Y') }}
                                </p>
                                
                            </div>
                            <h3 class="font-semibold mt-2 text-center text-2xl tracking-wide">Tu pago esta pendiente
                            </h3>
                            <p class="text-black container p-4 text-left my-1">
                                El cajero te solicitara el siguiente numero para realizar el pago.
                            </p>
                            <p class="text-black container p-4 text-left my-1">
                                Numero de Referencia : <br>
                                <small
                                    class="text-black text-2xl font-bold">{{ $dictation->pivot->reference }}</small>
                            </p>
                            <p class="text-black container p-4 text-left my-1"> <i>* Recuerda que deberas realizar el
                                    pago 48 hs antes de la fecha :
                                    {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }}</i> </p>

                        </div>
                    @endif

                @endforeach
            @else
                <br>
                <div class="max-w-lg w-full col-span-3 container mx-auto text-center rounded-lg shadow-lg p-4">
                    <h3 class="font-semibold bg-red-200 text-2xl tracking-wide">No tienes inscripciones!
                    </h3><br>
                    <p class="text-black my-1">
                        Consulta nuestros cursos e inscribite !!
                    </p><br>
                    <hr>
                    <div class="mt-2">
                        <a href="{{ route('courses.index') }}"
                            class="text-blue-700  inline-flex items-center font-semibold tracking-wide">
                            <span class="hover:underline">
                                Ver Curso
                            </span>
                            <span class="text-xl ml-2">&#8594;</span>
                        </a>
                    </div>
                </div>

            @endif
        </div>
        {{-- FIN CARD DE MIS INSCRIPCIONES --}}



</x-app-layout>
