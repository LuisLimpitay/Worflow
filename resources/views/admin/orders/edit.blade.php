@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1>Actualizacion Estado del Pago</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-body">

                    <div class="alert alert-warning" role="alert">
                        <p>Aqui podras cambiar el estado de un pago del Cliente</p>
                    </div>
                    {!! Form::model($pivot, ['method' => 'PATCH','route' => ['admin.orders.update', $pivot]]) !!}

                    <div class="form-group">
                        {!! Form::label('status', 'Estado del Pago') !!}
                        {!! Form::select('status', ['pendiente' => 'pendiente','aprobado' => 'aprobado'], null, ['class' => 'form-control' ]) !!}
                    </div>
<br><br><br>
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-danger" type="submit">Cancelar</a>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>


@endsection




@section('js')
    <script>
        $(function() {

            $('#table-order').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@stop
