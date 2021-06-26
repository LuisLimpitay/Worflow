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

                    <div class=" text-right px-3 pt-3 py-2 text-white bg-green-600">
                        <p>Fecha de Inscripcion {{\Carbon\Carbon::parse($dictation->created_at)->format('d/m/Y')}}</p>
                        <a href="{{ route('inscripcion', auth()->user()->id) }}" target="_blank">Descargar Comprobante</a>
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

                            <p class="mt-2 text-xl text-gray-500"><b>Cliente : </b>{{ $users->last_name }},
                                {{ $users->name }} </p>
                            <p class="mt-2 text-xl text-gray-500"><b>Fecha :
                                </b>{{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }} <b>Hora</b>
                                {{ $dictation->time }} a.m. </p>

                            <p class="mt-2 text-xl text-gray-500"><b>Lugar : </b>{{ $dictation->places->name }} </p>
                            <p class="mt-2 text-xl text-gray-500"><b>Direccion :
                                </b>{{ $dictation->places->address_street }}
                                {{ $dictation->places->address_number }} </p>
                            <p class="mt-2 text-xl text-gray-500"><b>Ciudad: </b>{{ $dictation->places->city->name }} </p>
                            <p class="mt-2 text-xl text-gray-500"><b>Cupos: </b>{{ $dictation->pivot->quantity }}</p>

                            <br>
                            <p class="mt-2 text-gray-900"><i>- El dia del curso debera asisistir con la <b>Licencia Nacional de Conducir Vigente</b>. Caso contrario no podra rendir la parte practica.</i>
                            </p>

                        </div>

                    </div>

                </div>
            @else
                <div class="max-w-md mt-8  bg-white mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl">

                    <div class=" text-right px-3 pt-3 py-2 text-white bg-red-400"></div>
                    <h3 class="font-semibold mt-2 text-center text-2xl tracking-wide">Tu pago esta pendiente</h3>
                    <p class="text-gray-500 container p-4 text-left my-1">
                    Deberas acercarte a nuestras instalaciones con un maximo de 48 hs antes de la sustanciacion del curso.
                    </p>

                    <p class="text-gray-500 container p-4 text-left my-1">Direccion : Mariano Moreno 1400 - Caleta Olivia.
                        <br>
                        Telefono : (0297) 4871212
                        <br>
                        Horario de Atencion : Lun a Vie de 8:00 a 16:00.
                    </p>

                    <hr>
                    <p class="text-gray-500 text-center p-4 my-1">
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
                Consulta nuestros cursos e inscribite cuando quieras !
            </p><br>
            <hr>
            <div class="mt-2">
                <a href="{{route('courses.index')}}" class="text-blue-700  inline-flex items-center font-semibold tracking-wide">
                    <span class="hover:underline">
                        Ver Curso
                    </span>
                    <span class="text-xl ml-2">&#8594;</span>
                </a>
            </div>
        </div>

    @endif
    </div>



</x-app-layout>
