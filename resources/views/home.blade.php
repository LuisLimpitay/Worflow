<x-app-layout>

    <br>

    <!-- SLIDER ESTATICO -->
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://cemsa-arg.com/panel/assets/images/rooms/1_0.png?1551186076)">
                <div class="md:w-1/2">
                    <p class="text-5xl font-bold">Somos #WORKFLOW</p>
                    <p class="text-3xl mb-10 leading-none">Lideres en Manejo Defensivo</p>
                </div>
            </div> <!-- container -->
        </div>
    </div>
    <!-- SLIDER ESTATICO -->


    <!-- CUERPO -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">

                <p class="mt-2 leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Sobre Nosotros
                </p>

                <p class=" text-xl text-gray-500 lg:mx-auto">
                    Somos un equipo interdisciplinario de profesionales dedicados a la salud ocupacional y a la promoción del trabajo seguro; buscando disminuir las condiciones de riesgo y aumentar las conductas seguras del personal de las Empresas y/o Instituciones.

                </p>



            </div>


        </div>
    </div>
    <!-- FIN DEL CUERPO  -->


    <!-- component -->
    <div class="bg-white">


        <div class="container px-6 py-10 mx-auto md:py-16">
            <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
                <div class="flex items-center justify-center w-full md:w-1/2">
                    <img src="https://images.pexels.com/photos/543605/pexels-photo-543605.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                         alt="car photo" class="w-full h-full max-w-2xl rounded" />
                </div>
                <div class="w-full md:w-1/2">
                    <div class="max-w-md mx-auto">
                        <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                            Conducción Segura
                        </h1>

                        <p class="mt-5 leading-7 text-gray-600">

                            Nos dedicamos a la investigación, diseño y desarrollo de programas de capacitación teórico-práctico en Manejo Defensivo.

                        </p>
                        <p class="mt-5 leading-7 text-gray-600">

                            La aprobación del curso le otorgara a usted el carnet de manejo defensivo avalado por YPF y la SFC.

                        </p>

                        <div class="grid gap-6 mt-8 sm:grid-cols-2">
                            <div class="flex items-center space-x-6 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Prueba Teórica</span>
                            </div>
                            <div class="flex items-center space-x-6 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Prueba Práctica 4x4</span>
                            </div>
                            <div class="flex items-center space-x-6 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Recursos Materiales</span>
                            </div>
                            <div class="flex items-center space-x-6 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Experiencias de Conducción</span>
                            </div>

                            <div>

                            </div>
                            <br>

                            <div>
                                <a href="{{route('courses.index')}}" type="submit" class="text-2xl px-6 py-4 bg-yellow-500 text-white rounded-full ">
                                    Ver Curso
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- fin component -->

</x-app-layout>
