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

    <input type="search"> Buscar
    <br><br>
    <div class="card">

        <div class="body">

            <table id="example2" class="table table-striped table-responsive-lg">
                <thead class="thead-dark">

                    <th>#</th>
                    <th>ID DIC</th>
                    <th>ID USER</th>
                    <th>Email</th>

                    <th>Fecha del Curso</th>

                    <th>Metodo de Pago</th>
                    <th>Estado del Pago</th>
                    <th colspan="2">Accion</th>

                </thead>
                <tbody>
                    {{-- $enrollment es como si seria mi dictation --}}

                    @foreach ($pivots as $pivot)

                        <tr>
                            <td>{{ $pivot->id }}</td>
                            <td>{{ $pivot->dictations->id }}</td>
                            <td>{{ $pivot->users->id }}</td>


{{--                             <td class="text-center">{{ \Carbon\Carbon::parse($pivot->created_at)->format('d/m/Y H:i') }}</td>
                        <td>{{ $pivot->users->name }}, {{ $pivot->users->name }}</td> --}}    
                            <td>{{ $pivot->users->email }}</td>

                            
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
                                <a href="">Cambiar</a>
                            </td>
                            <td width="5px">
                                <form action="{{ route('admin.orders.destroy', $pivot) }}" class="form-eliminar"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>

                            {{-- aca deberia hacer para algo para poder cambiar el estado del pago --}}

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
