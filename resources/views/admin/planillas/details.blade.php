@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1>Ordenes de Compra </h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')

    <div class="card">

        <div class="body">

            <table id="example2" class="table table-striped">
                <thead class="thead-dark">

                    <th>ID Dic</th>
                    <th>Cliente</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>

                    <th>Estado del Pago</th>

                    <th colspan="2">Accion</th>

                </thead>
                <tbody>
                    {{-- $enrollment es como si seria mi dictation --}}

                    @foreach ($dictations as $dictation)

                        <tr>
                            <td>{{ $dictation->id }}</td>
                            <td>
                                <ul>
                                    @foreach ($dictation->users as $user)
                                        <li>{{$user->name}}, {{$user->last_name}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            {{-- <td>{{ $pivot->users->last_name }}, {{ $pivot->users->name }}</td>
                            <td>{{ $pivot->users->number_license }}</td>

                            <td class="text-center">{{ \Carbon\Carbon::parse($pivot->created_at)->format('d/m/Y H:i') }}
                            </td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($pivot->dictations->date)->format('d/m/Y') }}
                            </td>

                            <td class="text-center">{{ $pivot->payment_method }}</td>
                            <td>
                                @if ($pivot->status == 'aprobado')
                                    <p class="badge badge-success">Aprobado</p>
                                @else
                                    <p class="badge badge-danger"><b>Pendiente</b></p>
                                @endif
                            </td>

                            <td>
                                <a href="">cambiar</a>
                            </td>
                            <td width="5px">
                                <form action="{{ route('admin.orders.destroy', $pivot->dictations->id) }}" class="form-eliminar"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td> --}}


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@stop


@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#example2').DataTable({
            responsive: true,
            autoWidth: false
        });

    </script>
@endsection
