<x-app-layout>
    
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
</x-app-layout>