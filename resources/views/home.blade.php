<x-app-layout>
    {{-- @if (session('info'))
    <div class="alert alert-success">
        <script>alert("Inscripcion Exitosa !!! No te olvides que podes consultar tus inscripciones en tu perfil>mis inscripciones");</script>
    </div> 
    @endif --}}
    <br>

    <!-- SLIDER ESTATICO -->
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill"
                style="background-image: url(https://cemsa-arg.com/panel/assets/images/rooms/1_0.png?1551186076)">
                <div class="md:w-1/2">
                    <p class="text-5xl font-bold">Somos #WORKFLOW</p>
                    <p class="text-3xl mb-10 leading-none">Lideres en Manejo Defensivo</p>
                </div>
            </div> <!-- container -->
        </div>
    </div>
    <!-- SLIDER ESTATICO -->


    <!-- SOBRE NOSOTROS -->
    <div class="py-12 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">

                <p class="mt-2 leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Quienes Somos
                </p>

                <p class=" text-xl text-gray-500 lg:mx-auto">
                    Somos un equipo interdisciplinario de profesionales dedicados a la salud ocupacional y a la
                    promoción del trabajo seguro; buscando disminuir las condiciones de riesgo y aumentar las conductas
                    seguras del personal de las Empresas y/o Instituciones.
                </p>

            </div>
        </div>
    </div>
    <!-- FIN SOBRE NOSOTROS  -->


    <!-- RELLENO -->
    <div class="bg-gray-100">


        <div class="container px-6 py-10 mx-auto md:py-16">
            <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
                <div class="flex items-center justify-center w-full md:w-1/2">
                    <img src="https://images.pexels.com/photos/543605/pexels-photo-543605.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="car photo" class="w-full h-50 max-w-2xl rounded" />
                </div>
                <div class="w-full md:w-1/2">
                    <div class="max-w-md mx-auto">
                        <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                            Objetivos
                        </h1>

                        <p class="mt-5 text-xl leading-7 text-gray-600">Workflow se propone evaluar y capacitar al
                            personal de las Empresas y/o instituciones de la región, conformándonos como una entidad
                            líder en la prestación de servicios para las diferentes industrias de la region.</p>
                        <p class="mt-5 text-xl leading-7 text-gray-600">

                            Estamos avalados por YPF y la NSC (Consejo Nacional de Seguridad ).

                        </p>

                        {{-- PALOMITAS --}}
                        {{-- <div class="grid gap-6 mt-8 sm:grid-cols-2">
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

                           

                        </div> --}}
                        {{-- FIN PALOMITAS --}}
                        <br>
                        <div class="text-white">
                            <p class="text-xs font-medium text-gray-800 md:text-4xl">
                                Homologados por:
                            </p>
                            <div class="grid sm:grid-cols-2 py-10 md:grid-cols-2 lg:grid-cols-2 gap-1 sm:gap-12 ">

                                <div class="group flex items-center bg-indigo-900 gap-2 px-6">
                                    <img class="w-12"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAAAM1BMVEUAZb3///+Ast6/2e9AjM4Qb8Hv9fswgsnf7PfP4vNgn9ZQldKPvOKvz+qfxeZwqNogeMXzRdklAAACT0lEQVR4nO3Z0XKCMBCFYQQCiKK8/9PWVjuSk10MCtaZ/t+lYUMOkgS0KAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwL8Whp3Y6xF6wK4MPw1d0hDrhvMYd1U9qLiqn4xSPuhI25v21nDOGFQVdXbYNEjR68mj1tA4OYo2a1hDmPS1bZDkmh+mjUdpbO9NWcPa7cPCiueDFDJPusmpazlLPynLCzJNsnWQsI+7Ot5bZEafpmWZQSZFWwcp2sbpS26seEWTAXTVN+npx+hUrB9E15Pfm6u2P7aHVV4/DX2yyp6ciq5MXC7ES0F0wt9urviWa9q4xg5ycdIBOxXx+nhTj9an+WTC10a6XkrcIMleGewKM8irZMJ/X0TZKI5a4gfRBb22KzYJohO+1BsrPasfRLfwtwbRs7fxZZWJPh/kT78RfXian+jzQXTdau2KrYIkq82ETvTZIMnDoVOxWRDd4e+SiT4X5Kyb4pAZpK1L44t/xmjty+6l04OuW9op7ePgVBhe2w3v9BnxypjoecPSy/C+IObbkjXRFwSZlL8xiDXhrYmeH6RZ9AazXpB0wpsTPTtI1y6qWC9IMUrX/hqZEaMpw7KKFYPM7HMLgzRDH5ZVfEaQKnqxOFiP41Kh7yPH6iOC+Ad6FcZday/0z/nTIGsiyOKuCZKHIIu7Jkie7LN9eBD97d89m/6t8HhY2rX+p7Qu/btk5222emDzsOvkXX7NfTyR/HJ7dg5M/nrz3lv8rjPuRgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8O98AXQRELLyP1ViAAAAAElFTkSuQmCC"
                                        alt="" />
                                    <div>
                                        <span class="text-xl">YPF</span>
                                        <span class=" text-blue-300 block">Operadora</span>
                                    </div>

                                </div>
                                <div class="group flex items-center bg-indigo-900 gap-2 px-6">
                                    <img class="w-12"
                                        src="data:image/png;base64,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"
                                        alt="" />
                                    <div>
                                        <span class="text-xl">SINOPEC</span>
                                        <span class=" text-blue-300 block">Operadora</span>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
    <!-- FIN RELLENO -->

    <!-- RELLENO CAPACITACIONES-->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Seguridad Vial</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Nuestros Cursos
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Nos dedicamos a la investigación, diseño y desarrollo de programas de capacitación teórico-práctico
                    en Manejo Defensivo.

                </p>

            </div>


        </div>
    </div>
    <!-- FIN RELLENO CAPACITACIONES-->

    <div class="container mx-auto py-8 ">

        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">

            <div class="md:flex">

                @foreach ($courses as $course)

                    <div class="md:flex-shrink-0">

                        <img class="h-48 w-full object-cover md:h-full md:w-48"
                            src="https://images.pexels.com/photos/1203768/pexels-photo-1203768.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Man looking at item at a store">
                    </div>

                    <div class="p-8">
                        <p class="inline-block px-3 bg-red-500 text-gray-200 rounded-full">
                            Modalidad {{ $course->mode }}
                        </p>
                        <p class="mt-2 text-xl font-bold text-gray-800">{{ $course->name }}</p>
                        <p class="mt-2 text-gray-500">{{ $course->description }}</p>
                        <p class="mt-2 text-gray-500"><b>Instructor: </b>{{ $course->teachers->name }}</p><br>
                        <p class="inline-block px-3 py-2 bg-yellow-300 font-bold text-black rounded-full">ARS
                            ${{ $course->price }}</p><br>
                        <br>
                        <a href="{{ route('courses.show', $course) }}"
                            class="inline-flex text-center px-4 py-2 text-sm bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                            Inscribirme</a>

                    </div>
            </div>
        </div>
        @endforeach

    </div>


    <!-- ************************************************************************************************************-->
    {{-- AVALADOS POR --}}
    <!-- ************************************************************************************************************-->


    <!-- ************************************************************************************************************-->
    {{-- AVALADOS POR --}}
    <!-- ************************************************************************************************************-->


    @section('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {@if (session('info') == 'inscripcion exitosa')
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Inscripcion Exitosa',
                    text: 'Somos Workflow, somos Manejo Defensivo',
                    footer: '<p>Deseas descargar tu comprobante? haz clic  <a href="{{ route('customers.enrollments', auth()->user()->id) }}"> AQUI</a></p>'
                })

            </script>
        @endif
    @endsection
</x-app-layout>
