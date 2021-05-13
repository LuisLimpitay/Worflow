<x-app-layout>

<br>
    <div class="container mx-auto justify-items-center grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">
    
      
          <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-green-300 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-4">
            <div class="flex flex-col justify-center">
                      <p class="text-gray-900 dark:text-gray-300 font-semibold">Paso 1 </p>
    
              <p class="text-black dark:text-gray-100 text-justify font-semibold">Completado</p>
            </div>
        </div>
          <!-- END SMALL CARD ROUNDED -->
      
          <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-red-800 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-2">
                <div class="flex flex-col justify-center">
                  <p class="text-gray-400 dark:text-gray-300 font-semibold">Paso 2</p>
                  <p class="text-gray-400 dark:text-gray-100 text-justify font-semibold">Método de Pago </p>
                </div>
              </div>
                  <!-- END SMALL CARD ROUNDED -->
            <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-red-800 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-2">
                <div class="flex flex-col justify-center">
                  <p class="text-gray-400 dark:text-gray-300 font-semibold">Paso 3</p>
                  <p class="text-gray-400 dark:text-gray-100 text-justify font-semibold">Confirmar Pago</p>
                </div>
              </div>
          <!-- END SMALL CARD ROUNDED --->
          
    </div>
    <br><hr>


    {{-- ************************************************************************************************************* --}}
    {{-- ************************************************************************************************************* --}}


    <div class="container mx-auto py-8 ">

        <P class="text-4xl">Cronograma de Dictado de Cursos</P><br><hr>


        <table class="table-responsive">
            <thead class="justify-between">
            <tr class="bg-gray-800 container mx-auto text-xl">
                <th class=" py-2"><span class="text-gray-300">Fecha</span></th>

                <th class=" py-2"><span class="text-gray-300">Ciudad</span></th>
                <th class=" py-2"><span class="text-gray-300">Hora</span></th>
                <th class=" py-2"><span class="text-gray-300">Duracion</span></th>
                <th class=" py-2"><span class="text-gray-300">Cupos</span></th>
                <th class=" py-2"><span class="text-gray-300">Acciones</span></th>
            </tr>
            </thead>

            <tbody class="bg-gray-200 justify-between">

            @foreach ($dictations as $dictation)

                    <td class="px-3 py-2">{{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y')}}</td>

                    <td class="px-6 py-2">{{$dictation->places->city}}</td>

                    <td class="px-2 py-2">{{$dictation->time}}</td>

                    <td class="px-3 py-2">{{$dictation->duration}} hs</td>

                    <td class="px-4">
                        <p class="text-xl px-4  container mx-auto bg-red-200 text-black py-2 border rounded-full ">
                            {{$dictation->stock}}
                        </p>
                    </td>

                    <td class="px-4">

                        <div class="flex justify-center">
                            <a href="{{route('courses.checkout', $dictation)}}"
                               class="btn btn-primary bg-gray-800 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black" role="button" aria-pressed="true">
                                Seleccionar
                            </a><br>
                        </div>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <br>

</x-app-layout>
