<x-app-layout>

    
    {{-- MIGAS DE PAN --}}
    <nav>
        <ol class="list-reset py-4 pl-4 rounded flex bg-grey-light text-grey">
          <li class="px-2"><a href="{{route('home')}}" class="no-underline text-indigo">Inicio</a></li>
          <li>/</li>
          <li class="px-2 text-gray-900"><a href="{{route('profile.show')}}" class="no-underline text-indigo">Perfil</a></li>
          <li>/</li>
          <li class="px-2 text-gray-500">Mis Inscripciones</li>
        </ol>
    </nav>
    {{-- FIN MIGAS DE PAN --}}


    <!-- component -->
    <div class="container mx-auto py-6 items-center ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="container mx-auto col-span-2">
                <div class="container mx-auto">
                    <h1 class="px-3 text-4xl text-center">Tus Inscripciones</h1><br><br>
                    @if (($users->dictations->count()))
                    <table class="container mx-auto table-auto">
                        <thead class="justify-between">
                            <tr class="bg-gray-800">

                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Fecha Inscripcion</span>
                                </th>
                                <th class=" py-2">
                                    <span class="text-gray-300">ID dictation</span>
                                </th>
                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Fecha del Curso</span>
                                </th>
                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Hora</span>
                                </th>
                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Ciudad</span>
                                </th>

                                <th class="px-10 py-2">
                                    <span class="text-gray-300">Direccion</span>
                                </th>
                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Precio</span>
                                </th>
                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Estado del Pago</span>
                                </th>
                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Accion</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-gray-200">

                            @foreach ($users->dictations as $user)
                            {{-- CON MI $user ACCEDO A LOS DATOS DEL DICTADO DONDE ESTA INSCRIPTO EL NEGRO --}}

                                <tr class="bg-white border-4 border-gray-200">

                                    <td class="text-black px-8 py-2">
                                        {{ \Carbon\Carbon::parse($user->pivot->created_at)/*->format('d/m/Y')*/}}    
                                    </td>
                                    <td class="text-black px-6 py-2">
                                        {{$user->id}}    
                                    </td>
                                    <td class="text-black px-8 py-2">
                                        {{ \Carbon\Carbon::parse($user->date)->format('d/m/Y')}}    
                                    </td>
                                    <td class="text-black px-8 py-2">
                                        {{$user->time}}    
                                    </td>
                                    <td class="text-black px-3 py-2">
                                        {{$user->places->city}}    
                                    </td>
                                    <td class="text-black px-4 py-2">
                                        {{$user->places->address_street}} {{$user->places->address_number}}    
    
                                    </td>
                                    <td class="text-black px-4 py-2">
                                        ${{$user->pivot->ammount}}    
                                    </td>
                                    <td class="text-black px-8 py-2">
                                        {{$user->pivot->status}}    
                                    </td>

                                    
                                    <td>
                                        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                            <span>Comprobante</span>
                                          </button>
                                    </td>

                                </tr>


                            @endforeach
                        </tbody>
                    </table>
                                            
                    @else
                        <div class="max-w-lg w-full text-center rounded-lg shadow-lg p-4">
                            <h3 class="font-semibold text-lg tracking-wide">No estas inscripto a ningun curso</h3>
                            <p class="text-gray-500 my-1">
                                Puedes ingresar al siguiente link para inscribirte a     un curso.
                            </p>
                            <div class="mt-2">
                                <a href="{{route('courses.index')}}" 
                                    class="text-blue-700  inline-flex items-center font-semibold tracking-wide">
                                    <span class="hover:underline">
                                        Inscribirme
                                    </span>
                                    <span class="text-xl ml-2">&#8594;</span>
                                </a>
                            </div>
                        </div>
                
                
                
                    <!-- support me by buying a coffee -->
                    <a href="https://www.buymeacoffee.com/danimai" target="_blank" class="bg-purple-600 p-2 rounded-lg text-white fixed right-0 bottom-0">
                        Support me
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br><br>
</x-app-layout>
