@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1 xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">Clientes</h1>
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



                    {!! Form::open(['route' => 'admin.customers.store', 'autocomplete' => 'off']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('name', 'Nombre /s') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('last_name', 'Apellido /s') !!}
                            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
                            @error('last_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('phone', 'Telefono Celular') !!}
                            {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => '10', 'placeholder' => 'Ej: 297111222']) !!}
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            {!! Form::label('expire_license', 'Vencimiento L.N.C.') !!}
                            {!! Form::date('expire_license', null, ['class' => 'form-control', 'id' => 'date']) !!}
                            @error('expire_license')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                        <br>

                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ej: ejemplo@gmail.com']) !!}
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password', 'Contraseña') !!}
                                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('confirm-password', 'Confirmar Contraseña') !!}
                                {!! Form::password('confirm-password', ['class' => 'form-control']) !!}

                            </div>

                        </div>
                    </div>
                    <br>
                    <hr>
                    {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-danger" type="submit">Cancelar</a>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>


@endsection

@section('js')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
        $(function() {
            $("#date").datepicker({
                minDate: 10,
                changeMonth: true,
                changeYear: true,
                maxDate: "+5M +5D",
                dateFormat: "yy-mm-dd"

            });
        });

    </script>
@endsection
