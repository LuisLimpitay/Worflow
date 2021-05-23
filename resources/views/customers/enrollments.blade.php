<x-app-layout>
    <br>

    <h1>Tus Inscripciones</h1>
    
<table>
    <!-- component -->
<div class="container mx-auto">
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

          <th class="px-6 py-2">
            <span class="text-gray-300">Estado del Pago</span>
          </th>
          <th colspan="2">
            <span class="text-gray-300">Accion</span> 
          </th>
        </tr>
      </thead>
      
      <tbody class="bg-gray-200">
          
        @foreach ($misinscripciones as $inscripcion)
                        
                <tr class="bg-white border-4 border-gray-200">
                    
                    <td class="px-8 py-2 flex flex-row items-center">
                        {{ \Carbon\Carbon::parse($inscripcion->dictations->date)->format('d/m/Y')}}
                    </td>
                    <td class="px-8 py-2>
                        <span class="text-center ml-2 font-semibold">{{$inscripcion->dictations->time}}</span>
                    </td>

                    <td class="px-8 py-2">
                        {{$inscripcion->dictations->places->city}}
                    </td>
                    <td class="px-8 py-2">
                        {{$inscripcion->dictations->places->address_street}} {{$inscripcion->dictations->places->address_number}}
                    </td>f
                    
                    <td class="px-6 py-2">
                        {{$inscripcion->status}}
                    </td class="px-8 py-2">

                    <td>
                        <button disabled="disabled">Descargar</button>  
                    </td>
                
                </tr>
        
        
        @endforeach
      </tbody>
    </table>
  </div>
</table>




<div class="container mx-auto py-8 ">

    <p class="text-4xl px-3 text-red-400">Tus Inscripciones</p><br>
    <table class="table table-striped table-responsive">
        <thead class="thead-dark">
            <th>ID </th>

            <th>Fecha del curso</th>

            <th>Hora </th>
            <th colspan="3">Direccion</th>
            <th>Medio de Pago</th>
            <th>Estado de Tu pago</th>
            
            <th colspan="1">Acciones</th>
        </thead>

        <tbody>
            @foreach ($misinscripciones as $inscripcion)

                <tr>
                    <td> {{$inscripcion->id}} </td>
                    
                    <td>{{ \Carbon\Carbon::parse($inscripcion->dictations->date)->format('d/m/Y')}}</td>
                    <td> {{$inscripcion->dictations->time}} </td>

                    <td colspan="3"> {{$inscripcion->dictations->places->address_street}} {{$inscripcion->dictations->places->address_number}} - {{$inscripcion->dictations->places->city}}</td>
                    <td> {{$inscripcion->payments->name}} </td>

                    <td> {{$inscripcion->status}} </td>




                    {{-- <td width="10px">
                        <form action="{{route('admin.courses.destroy', $course)}}" method="POST">
                            @csrf
                            @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td> --}}
                </tr>


            @endforeach

        </tbody>
    
    </table>
    
</div>
</x-app-layout>