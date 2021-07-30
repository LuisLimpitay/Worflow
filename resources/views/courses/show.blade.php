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
    <div class="max-w-xl mx-auto my-4 border-b-2 pb-4">
        <div class="flex pb-3">
            <div class="flex-1">
                <div class="w-10 h-10 mx-auto rounded-full text-lg text-white flex items-center">
                    <span class="text-black text-center w-full"><a href="{{route('courses.index')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg></a> </span>
                </div>
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
    {{-- FIN PROCESO DE INSCRIPCION TIPO MIGAS --}}

    {{--Contenido Detalles, Fechas--}}
    <div class="container mx-auto py-8 ">
        <div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto ">
            {{--COL 1--}}
            <div class="grid grid-cols-1 md:col-span-2 lg:col-span-2">
                <div>
                    <p class="text-4xl px-3 text-gray-400">{{$course->name}}</p><br>
                    <p class="text-justify px-3 ">{{$course->description}}</p><br>
                    <p class="text-4xl px-3 text-gray-400">Fechas Disponibles</p><br>
                    @if ($dictations->count())
                    <!-- component -->
                        <div class="container mx-auto px-4 sm:px-8">
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
                                                    <p class="text-gray-900 text-center whitespace-no-wrap">{{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }}</p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">{{$dictation->places->city->name}}</p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">{{\Carbon\Carbon::parse($dictation->time)->format('H:i')}} a.m.</p>
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
                                                            Elegir Fecha
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
            </div>
            {{--FIN COL 1--}}
            <div class="container mx-auto col-span-1 md:grid-cols-2">
                <div>
                    <h1 class="text-4xl px-3 text-gray-400">Contenido </h1> <br>
                    <p class="px-5 text-justify ">{{ $course->content }}</p><hr><br>
                    <p class="px-5 text-justify "><b>Duracion : </b> 8 hs</p><hr><br>
                    <p class="px-5 text-justify "><b>Modalidad : </b> {{ $course->mode }}</p><hr><br>

                    <p class="px-5 "><b>Instructor :</b> {{$course->teachers->last_name}} {{$course->teachers->name}}</p>
                    <p class="px-5 text-justify ">{{ $course->teachers->about }}</p><hr><br>
                    <p class="px-5 "><b>Precio : </b> ARS $ {{ number_format($course->price) }}.00</p>
                    <hr>
                    <br>
                </div>
            </div>

        </div>

    </div>
    {{--FIN Contenido Detalles, Fechas--}}

</x-app-layout>
