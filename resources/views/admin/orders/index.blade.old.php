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
                    <th>Fecha de Inscripcion</th>
                    <th>Cliente</th>
                    <th>Precio</th>

                    <th>Fecha del Curso</th>

                    <th>Metodo de Pago</th>
                    <th>Estado del Pago</th>
                    <th width="120px">Action</th>

                </thead>
                <tbody>
                    {{-- $enrollment es como si seria mi dictation --}}

                    @foreach ($pivots as $pivot)

                        <tr>
                            <td>{{ $pivot->id }}</td>
                            <td class="text-center">{{ $pivot->created_at->format('d M Y H:i') }}</td>
                            <td>{{ $pivot->users->name }}, {{ $pivot->users->name }}</td>
                            <td>{{ $pivot->dictations->courses->price }}</td>
                            <td class="text-center">{{ $pivot->dictations->date->format('d M Y, H:i') }}</td>
                            <td>{{ $pivot->payment_method}}</td>

                            <td>|
                                @if ($pivot->status == 'aprobado')
                                    <p class="badge badge-success">Aprobado</p>
                                @else
                                    <p class="badge badge-danger"><b>Pendiente</b></p>
                                @endif
                            </td>

                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.orders.edit',$pivot) }}"><i
                                        class="fas fa-edit"></i></a>
                                {!! Form::open(['method' => 'DELETE','route' => ['admin.orders.destroy', $pivot],'style'=>'display:inline']) !!}
                                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                {!! Form::close() !!}
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
