<x-app-layout>


    {{-- MIGAS DE PAN --}}
    <nav>
        <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">

            <li class="px-2"><a href="{{ route('home') }}" class="no-underline text-indigo">Inicio</a></li>
            <li>/</li>

            <li class="px-2"><a href="{{ route('courses.index') }}" class="no-underline text-indigo">Cursos</a></li>
            <li>/</li>

            <li class="px-2 text-gray-500">Manejo Defensivo</li>

        </ol>
    </nav>
    {{-- FIN MIGAS DE PAN --}}


    {{-- PROCESO DE INSCRIPCION TIPO MIGAS --}}
<!-- component -->
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
                <div class="w-full bg-gray-400 rounded items-center align-middle align-center flex-1">
                    <div class="bg-green-400 text-xs leading-none py-1 text-center text-gray-400 rounded " style="width: 25%"></div>
                </div>
            </div>


            <div class="flex-1">
                <div class="w-10 h-10 bg-gray-400 mx-auto rounded-full text-lg text-white flex items-center">
                    <span class="text-black text-center w-full"><i class="fa fa-check w-full fill-current white">2</i></span>
                </div>
            </div>

            <div class="w-1/6 align-center items-center align-middle content-center flex">
                <div class="w-full bg-gray-400 rounded items-center align-middle align-center flex-1">
                    <div class="bg-gray-400 text-xs leading-none py-1 text-center text-gray-400 rounded "></div>
                </div>
            </div>

            <div class="flex-1">
                <div class="w-10 h-10 bg-gray-400 mx-auto rounded-full text-lg text-white flex items-center">
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




    <div class="container mx-auto py-8 ">

        <div class="grid bg grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <div class="container mx-auto col-span-2">
                <p class="text-4xl px-3 text-red-400">Fechas Disponibles</p><br>

                <div class="container mx-auto py-2 ">

                    @if ($dictations->count())
                        <!-- component -->

                            <div class="container mx-auto px-4 sm:px-8">
                                <div class="">

                                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                            <table class="min-w-full leading-normal">
                                                <thead>
                                                <tr>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300 text-center font-bold text-black uppercase tracking-wider">
                                                        Fecha
                                                    </th>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300 text-left font-bold text-black uppercase tracking-wider">
                                                        Ciudad
                                                    </th>

                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300 text-center font-bold text-black uppercase tracking-wider">
                                                        Direccion
                                                    </th>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300 text-left font-bold text-black uppercase tracking-wider">
                                                        Hora
                                                    </th>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300 font-bold text-black uppercase tracking-wider">
                                                        Cupos
                                                    </th>
                                                    <th
                                                        class="px-5 py-3 border-b-2 border-gray-500 bg-gray-300  font-bold text-black uppercase tracking-wider">
                                                        Accion
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($dictations as $dictation)
                                                <tr>

                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 text-center whitespace-no-wrap">{{\Carbon\Carbon::parse($dictation->date)->format('d M Y')}}</p>
                                                    </td>

                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">{{$dictation->places->city->name}}</p>
                                                    </td>


                                                    <td class="px-5 py-5 border-b text-center border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{$dictation->places->address_street}} {{$dictation->places->address_number}}
                                                        </p>
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <p class="text-gray-900 whitespace-no-wrap">{{$dictation->time}}</p>
                                                    </td>
                                                    <td class="px-5 py-5 border-gray-200 bg-white text-sm">
                                                        <p class="text-center  font-bold bg-green-200  rounded-full ">
                                                            {{ $dictation->stock }}
                                                        </p>

                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                        <div class="flex justify-center">
                                                            <a href="{{ route('courses.checkout', $dictation) }}"
                                                               class="btn btn-primary bg-gray-800 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black"
                                                               role="button" aria-pressed="true">
                                                                Seleccionar
                                                            </a><br>
                                                        </div>
                                                    </td>

                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="p-3 bg-gray-300">{{$dictations->links()}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </body>

                    @else
                        <div class="max-w-lg w-full text-center rounded-lg shadow-lg p-4">
                            <h3 class="font-semibold text-lg tracking-wide">No hay fechas de Cursos !
                            </h3>
                            <p class="text-gray-500 my-1">
                                Estamos trabajando para poder crear cursos a la brevedad.
                            </p>
                            <p class="text-gray-500 my-1">
                                Somos Workflow, Somos Manejo Defensivo.
                            </p>

                        </div>
                    @endif
                </div>

                    <div class="text-lg">
                        <h1 class="text-4xl pt-4 px-3 text-red-400">Contenido </h1> <br>
                        <p class="px-5 ">{{ $course->content }}</p> <hr><br>

                        <p class="px-5 "><b>Instructor :</b> {{$course->teachers->name}}</p>
                        <p class="px-5 ">{{ $course->teachers->about }}</p><hr><br>

                        <p class="px-5 "><b>Precio : </b> ARS $ {{ $course->price }}</p>
                        <p class="px-5 "><b>Duracion :</b> 8 horas</p><hr><br>

                        <p class="px-5 "><i>Recuerde que debera realizar el pago de su inscripcion como maximo 48 hs antes del dia del curso.</i></p>

                    </div>


            </div>

            {{-- CARD LATERAL --}}
            <div class="mt-24">
                <dt>
                    <p class="ml-16 text-3xl leading-6 font-medium text-red-500">Requisitos</p>
                </dt>

                <dd class="mt-2 ml-16 text-base text-gray-900">
                    - Tener vigente la Licencia Nacional de Conducir.
                </dd>

                <br>
                <dt>
                    <p class="ml-16 text-3xl leading-6 font-medium text-red-500">Estructura del Curso</p>
                </dt>

                <dd class="mt-2 ml-16 text-base text-gray-900">
                    - Tiempo de duración 8 horas.
                </dd>
                <dd class="mt-2 ml-16 text-base text-gray-900">
                    - Contenido Teórico.
                </dd>
                <dd class="mt-2 ml-16 text-base text-gray-900">
                    - Pruebas Prácticas.
                </dd>
                </dt>
                <br>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md text-white">
                    <!-- Heroicon name: outline/annotation -->

                </div>
                <p class="ml-16 text-3xl leading-6 font-medium text-red-500">Evaluaciones</p>
                </dt>

                <dd class="mt-2 ml-16 text-base text-gray-900">
                    - La Evaluación se aprueba a partir del 70%.
                </dd>

            </div>
            {{-- CARD LATERAL --}}


        </div>

    </div>

    </div>



</x-app-layout>
