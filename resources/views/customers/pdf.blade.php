<div class="container mx-auto py-6 items-center ">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="container mx-auto col-span-2">
            <div class="container mx-auto">
                <h1 class="px-3 text-4xl text-center">Tus Inscripciones</h1><br><br>

                <table class="container mx-auto table-auto">
                    <thead class="justify-between">
                        <tr class="bg-gray-800">

                            <th class="px-8 py-2">
                                <span class="text-gray-300">Fecha Inscripcion</span>
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


                        {{-- CON MI $user ACCEDO A LOS DATOS DEL DICTADO DONDE ESTA INSCRIPTO EL NEGRO --}}

                            <tr class="bg-white border-4 border-gray-200">

                                <td class="text-black px-8 py-2">
                                    {{ \Carbon\Carbon::parse($fila->created_at)->format('d/m/Y')}}
                                </td>

                            </tr>


                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
