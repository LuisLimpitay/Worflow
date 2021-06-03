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

      
    <div class="container mx-auto justify-items-center grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">
          
        <!-- END SMALL CARD ROUNDED -->
          <div class="bg-gray-100 border-green-300 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-4">
          <div class="flex flex-col justify-center">
                    <p class="text-gray-900 dark:text-gray-300 font-semibold">Paso 1 </p>
  
            <p class="text-black dark:text-gray-100 text-justify font-semibold">Seleccionar Fecha</p>
          </div>
      </div>
        <!-- END SMALL CARD ROUNDED -->
    
        <!-- END SMALL CARD ROUNDED -->
          <div class="bg-gray-100 border-red-800 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-2">
              <div class="flex flex-col justify-center">
                <p class="text-gray-400 dark:text-gray-300 font-semibold">Paso 2</p>
                <p class="text-gray-400 dark:text-gray-100 text-justify font-semibold">Método de Pago </p>
              </div>
            </div>
        <!-- END SMALL CARD ROUNDED -->
          <!-- END SMALL CARD ROUNDED -->
          <div class="bg-gray-100 border-red-800 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-2">
              <div class="flex flex-col justify-center">
                <p class="text-gray-400 dark:text-gray-300 font-semibold">Paso 3</p>
                <p class="text-gray-400 dark:text-gray-100 text-justify font-semibold">Terminado</p>
              </div>
            </div>
        <!-- END SMALL CARD ROUNDED --->
        
    </div>




    <div class="container mx-auto py-8 ">

        <div class="grid bg grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <div class="container mx-auto col-span-2">
                <p class="text-4xl px-3 text-red-400">Fechas Disponibles</p><br>
                <div class="container mx-auto py-2 ">
                    @if ($dictations->count())
                        <table class="table table-responsive">
                            <thead class="justify-between">
                                <tr class="bg-gray-800 container mx-auto text-xl">

                                    <th class="text-gray-300">ID</th>
                                    <th class="text-gray-300">user</th>
                                    <th class="text-gray-300">Fecha</th>

                                    <th class="text-gray-300">Ciudad</th>
                                    <th class="text-gray-300">Sede</th>

                                    <th class="text-gray-300">Dirección</th>

                                    <th class="text-gray-300">Hora</< /th>
                                    <th class="text-gray-300">Cupos</th>

                                </tr>
                            </thead>

                            <tbody class="bg-gray-200 justify-between">

                                @foreach ($dictations as $dictation)
                                    <tr>
                                        <td class="px-3">{{ $dictation->id }}</td>
                                        <td class="px-3">{{ $users->name }}</td>
                                        <td class="px-3">
                                            {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }}
                                        </td>

                                        <td class="px-3 py-2">{{ $dictation->places->city }}</td>
                                        <td class="px-3">{{ $dictation->places->name }}</td>

                                        <td class="px-3">{{ $dictation->places->address_street }}
                                            {{ $dictation->places->address_number }}</td>
                                        <td class="px-3">{{ $dictation->time }}</td>

                                        <td class="px-4">
                                            <p
                                                class="text-xl px-4  container mx-auto bg-red-200 text-black py-2 border rounded-full ">
                                                {{ $dictation->stock }}
                                            </p>
                                        </td>

                                        <td class="px-4">
                                            <div class="flex justify-center">
                                                <a href="{{ route('courses.checkout', $dictation) }}"
                                                    class="btn btn-primary bg-gray-800 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black"
                                                    role="button" aria-pressed="true">
                                                    Seleccionar
                                                </a><br>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

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
                        <p class="px-5 bg-gray-200">{{ $course->content }}</p> <hr><br>

                        <p class="px-5 bg-gray-200">Instructor >> {{$course->teachers->name}}</p>
                        <p class="px-5 bg-gray-200">Trayectoria >> {{ $course->teachers->about }}</p><hr><br>

                        <p class="px-5 bg-gray-200">Precio >> ARS $ {{ $course->price }}</p>
                        <p class="px-5 bg-gray-200">Duracion >> 8 horas</p><hr><br>

                        <p class="px-5 bg-gray-200"><i>Recuerde que debera realizar el pago de su inscripcion como maximo 48 hs antes del dia del curso.</i></p>

                    </div>
                

            </div>

            {{-- CARD LATERAL --}}
            <div class="py-12">
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
