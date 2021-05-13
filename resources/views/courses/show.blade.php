<x-app-layout>

    <div class="container mx-auto py-8 ">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <div class="container mx-auto col-span-2">

                <p class="text-4xl px-3 font-bold text-red-400">{{ $course->name }}</p><br>
                <p class="px-5">{{ $course->description }}</p> <br>
                <figure class="bg-cover bg-center container mx-auto px-4"
                        style="background-image: url({{ asset('/images/fondo.jpg') }})"></figure> <br>
                <div class="text-lg ">
                    <h1 class="text-4xl px-3 font-bold text-red-400">Contenido </h1> <br>
                    <p class="px-5">{{ $course->content }}</p>
                </div>

                <br>

                {{-- Boton de Inscripcion --}}
                <div class="flex justify-center">
                    <a href="{{ route('courses.dictationCurso', $course) }}"
                       class="inline-block text-xl px-6 py-3 bg-yellow-500 text-white rounded-full ">
                        Reservar Cupo
                    </a><br>
                </div>

            </div>


                <div class="relative">
                    <dt>

                        <p class="ml-16 text-2xl leading-6 font-medium text-gray-900">Requisitos</p>
                    </dt>

                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        - Tener vigente la Licencia Nacional de Conducir.
                    </dd>

                    <br>

                    <p class="ml-16 text-2xl leading-6 font-medium text-gray-900">Estructura del Curso</p>
                    </dt>

                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        - Tiempo de duración 8 horas.
                    </dd>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        - Contenido Teórico.
                    </dd>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        - Pruebas Prácticas.
                    </dd>


                    <br>
                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md text-white">
                        <!-- Heroicon name: outline/annotation -->

                    </div>
                    <p class="ml-16 text-2xl leading-6 font-medium text-gray-900">Evaluaciones</p>
                    </dt>


                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        - La Evaluación se aprueba a partir del 70%.
                    </dd>


                </div>

        </div>

    </div>

    </div>



</x-app-layout>
