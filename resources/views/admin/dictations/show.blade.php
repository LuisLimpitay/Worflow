@extends('adminlte::page')

@section('title', 'Dictados')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection
@section('content')

    <div class="row">
        {{-- COLUMNA 1 ////////////////****************--------------------------//////////////////// --}}
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <h3>Detalles del Dictado</h3><br>
                    <div>
                        <p><b>Fecha : {{ \Carbon\Carbon::parse($dictation->date)->format('d/ m/ Y') }} </b> </p>
                        <p><b>Curso :</b> {{ $dictation->courses->name }}</p>
                        <p><b>Ciudad :</b> {{ $dictation->places->city->name }}</p>
                        <p><b>Cupos Disponibles :</b> <span class="badge bg-success">{{ $dictation->stock }}</span></p>
                        </div>
                        <p><b>Asistentes</b> : <span class="badge bg-secondary">{{ $dictation->users->count() }}</span></p>
                    <div>

                </div>
                    <br><hr>
                    <div>
                        <a href="{{ route('admin.dictations.index') }}" class="btn btn-danger" type="submit">Volver</a>
                    </div>
                </div>
            </div>
            <br>
        </div>

        {{-- /Columna 2 ****************/////////////***********************-------------}}
        <div class="col-md-8">

            <div class="card card-primary card-outline">
                <div class="max-w-lg w-full rounded-lg shadow-lg p-3">
                    <h3>Planilla de Asistencia</h3>
                    @if ($pivots->count())
                            <a class="btn btn-info" href="{{ route('admin.planilla', $dictation) }}" target="_blank">Descargar <i class="far fa-file-pdf"></i></a><br><br>
                            <table id="table-dictation" class="table table-responsive-sm">
                                <thead class="thead-dark">
                                    <th>Nombre</th>
                                    <th>Email</th>

                                    <th>Venc L.N.C.</th>
                                    <th>Pago</th>

                                </thead>

                                <tbody>
                                    @foreach ($pivots as $pivot)
                                        <tr>
                                            <td> {{ $pivot->user->last_name }}, {{ $pivot->user->name }} </td>
                                            <td>{{ $pivot->user->email }}</td>
                                            <td> {{ \Carbon\Carbon::parse($pivot->user->expire_license)->format('d/m/Y') }} </td>
                                            <td>
                                                @if ($pivot->status == 'aprobado')
                                                    <p class="badge badge-success">Aprobado</p>
                                                @else
                                                    <p class="badge badge-danger"><b>Pendiente</b></p>
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    @else
                        <div class="max-w-lg w-full text-center rounded-lg shadow-lg p-4">
                            <h3 class="font-semibold text-lg tracking-wide">No hay registros !
                            </h3>

                            <p class="text-gray-500 my-1">
                                Somos Workflow, Somos Manejo Defensivo.
                            </p>

                        </div>
                    @endif
                </div>

            </div>
            <br>
        </div>
        {{-- /****************/////////////***********************------------------}}

    </div>


@stop

@section('js')
    <script>
        $(function() {

            $('#table-dictation').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "responsive": true,

                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por pagina",
                    "zeroRecords": "No hay registro para mostrar",
                    "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "",
                    "infoFiltered": "(Filtrando de _MAX_ registros)",
                    'search': "Buscar",
                    'paginate': {
                        'next': 'Siguiente',
                        'previous': 'Anterior'
                    }
                }
            });
        });

    </script>
@stop
