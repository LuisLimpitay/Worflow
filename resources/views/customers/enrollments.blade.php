<x-app-layout>

    <br>

    <!-- component -->
    <div class="container mx-auto py-6 items-center ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="container mx-auto col-span-2">
                <div class="container mx-auto">
                    <h1 class="px-3 py-4 text-4xl text-center">Tus Inscripciones</h1>
                    <table class="container mx-auto table-auto">
                        <thead class="justify-between">
                            <tr class="bg-gray-800">

                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Fecha del Curso</span>
                                </th>
                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Hora</span>
                                </th>
                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Ciudad</span>
                                </th>

                                <th class="px-8 py-2">
                                    <span class="text-gray-300">Direccion</span>
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

                            @foreach ($misinscripciones as $inscripcion)

                                <tr class="bg-white border-4 border-gray-200">

                                    <td class="px-8 py-2">
                                        {{ \Carbon\Carbon::parse($inscripcion->dictations->date)->format('d/m/Y') }}
                                    </td>
                                    <td class="px-8 py-2">
                                        {{ $inscripcion->dictations->time }}    
                                    </td>

                                    <td class="px-8 py-2">
                                        {{ $inscripcion->dictations->places->city }}
                                    </td>
                                    <td class="px-8 py-2">
                                        {{ $inscripcion->dictations->places->address_street }}
                                        N°{{ $inscripcion->dictations->places->address_number }}
                                    </td>

                                    <td class="px-8 py-2">
                                        {{ $inscripcion->status }}
                                    </td class="px-8 py-2">

                                    <td>
                                        <button
                                            class="btn btn-primary bg-gray-800 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black"
                                            type="submit">Descargar</button>
                                    </td>

                                </tr>


                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br><br>
</x-app-layout>
