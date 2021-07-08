<x-app-layout>
    <table id="table-order" class="table table-striped table-responsive-lg">
        <thead class="thead-dark">

            {{-- <th>ID</th> --}}
            <th>Nombre </th>
            <th>Cliente</th>
            <th>Precio</th>
            <th>Fecha del Curso</th>
            <th>Metodo</th>
            <th>Estado</th>
            <th>Nº Ref</th>

            <th width="80px">Action</th>

        </thead>
        <tbody>
            {{-- $enrollment es como si seria mi dictation --}}

            @foreach ($detalles as $pivot)

                <tr>
                    <td>{{ $pivot->dictation->courses->name }}</td>
                    <td>{{ $pivot->user->last_name}}, {{ $pivot->user->name}}</td>
                    <td>$ {{ number_format($pivot->ammount) }}</td>
                    <td class="text-center">
                        {{ \Carbon\Carbon::parse($pivot->dictation->date)->format('d/m/Y') }}
                    </td>
                    <td>{{ $pivot->dictation->time }}</td>
                    <td>{{$pivot->dictation->places->name}}</td>
                    <td>{{$pivot->dictation->places->address_street}} {{$pivot->dictation->places->address_number}}</td>
                    <td>{{$pivot->dictation->places->city->name}}</td>

                    <td>{{ $pivot->payment->name }}</td>

                    <td>
                        @if ($pivot->status == 'aprobado')
                            <p class="badge badge-success ">Aprobado</p>
                        @else
                            <p class="badge badge-danger"><b>Pendiente</b></p>
                        @endif
                    </td>
                    <td>{{ $pivot->reference }}</td>
                    {{-- aca deberia hacer para algo para poder cambiar el estado del pago --}}

                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>