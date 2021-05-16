<x-app-layout>

    <br>
    <!-- SLIDER ESTATICO -->
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center text-white py-24 px-10 object-fill" style="background-image: url(https://cemsa-arg.com/panel/assets/images/rooms/3_0.png?1551186123)">
                <div class="md:w-full">
                    <p class="text-5xl mb-10 font-bold">#MANEJODEFENSIVO</p>

                    <a href="{{route('courses.index')}}" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Ver Cursos</a>
                </div>
            </div> <!-- container -->
        </div>
    </div>
    <!-- SLIDER ESTATICO -->

    <!-- ************************************************************************************************************-->

    <!-- RELLENO-->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Seguridad Vial</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Capacitaciones
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Nos dedicamos a la investigación, diseño y desarrollo de programas de capacitación teórico-práctico en Manejo Defensivo.

                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">

                    Contamos con diversos especialistas e instructores entrenados y certificados por el National Safety Council.
                </p>
            </div>


        </div>
    </div>
    <!-- FIN DEL RELLENO  -->

    <!-- ************************************************************************************************************-->

    <!-- TARJETA DEL CURSO  -->
    <div class="container mx-auto py-8 ">


            @foreach ($courses as $course)

                <div class="container mx-auto flex flex-col max-w-md bg-gray-300  px-8 py-6 rounded-xl space-y-5 items-center">

                    <p class="inline-block px-3 h-6 bg-red-500 text-gray-200 rounded-full ">
                        Modalidad Presencial
                    </p>

                    <h3 class="font-serif font-bold text-gray-900 text-xl">{{$course->name}}</h3>

                    <p class=" leading-relaxed">{{$course->description}}</p>

                    <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>


                    <p class=" leading-relaxed">Por : {{$course->teachers->name}}</p>

                    <p class=" leading-relaxed font-bold text-xl ">ARS ${{$course->price}}</p>

                    <a href="{{route('courses.show', $course)}}" type="submit" class="text-xl inline-block px-6 py-4 bg-yellow-500 text-white rounded-full ">
                        Mas información
                    </a>

                </div>

            @endforeach


        </div>

    </div>
    <!-- FIN TARJETA DEL CURSO  -->

    <!-- ************************************************************************************************************-->


</x-app-layout>

