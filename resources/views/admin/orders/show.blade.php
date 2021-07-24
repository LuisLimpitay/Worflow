@extends('adminlte::page')

@section('title', 'Dictado')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection
@section('content')

    <div class="row">
        {{-- COLUMNA 1 ////////////////****************--------------------------//////////////////// --}}
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <h3>Detalles de Orden de Compra</h3>
                    <hr>

                    <div>
                        <p><b>Numero de orden : </b> {{ $pivot->id }}</p>
                        <p><b>Fecha de inscripcion : </b> {{ \Carbon\Carbon::parse($pivot->created_at)->format('d/m/Y') }}  <b> Hora : </b> {{ \Carbon\Carbon::parse($pivot->created_at)->format('H:i') }} </p>
                        <p><b>Cliente : </b> {{ $pivot->user->last_name }}, {{ $pivot->user->name }}</p>
                        <p><b>Fecha del Curso : </b> {{\Carbon\Carbon::parse($pivot->dictation->date)->format('d/m/Y') }}</p>
                        <p><b>Nro referencia : </b> {{ $pivot->reference }}</p>
                        <p><b>Metodo de Pago : </b> {{ $pivot->payment->name }}</p>
                        <p><b>Estado del Pago : </b> {{ $pivot->status }}</p>
                        <p><b>Cupos : </b> {{ $pivot->quantity }}</p>

                    </div>
                <div>

                </div>
                    <br><hr>
                    <div>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-danger" type="submit">Volver</a>
                    </div>
                </div>
            </div>
            <br>
        </div>


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
