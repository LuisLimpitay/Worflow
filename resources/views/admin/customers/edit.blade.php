@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
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


                    {!! Form::model($customer, ['method' => 'PATCH','route' => ['admin.customers.update', $customer]]) !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre /s') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('last_name', 'Apellido /s') !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('phone', 'Telefono Celular') !!}
                                {!! Form::text('phone', $customer->phone, ['readonly', 'class' => 'form-control', 'min' => '2021-07-12']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('expire_license', 'Vencimiento L.N.C.') !!}
                                {!! Form::date('expire_license', $customer->expire_license, ['readonly', 'class' => 'form-control', 'min' => '2021-07-12']) !!}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'readonly']) !!}
                    </div>


                    {!! Form::submit('Actaulizar', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-danger" type="submit">Cancelar</a>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>


@endsection




@section('js')
    <script>
        $(function() {

            $('#table-user').DataTable({
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
