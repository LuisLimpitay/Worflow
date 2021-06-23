@extends('adminlte::page')

@section('title', 'Inscripciones')

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

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">* {{ $error }}</p>
                        @endforeach
                    @endif

                    {!! Form::open(['route' => 'admin.customers.store', 'autocomplete' => 'off']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('name', 'Nombre /s') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('last_name', 'Apellido /s') !!}
                            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('phone', 'Telefono Celular') !!}
                            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ej: 297111222']) !!}
                        </div>

                        <div class="col-md-6">
                            {!! Form::label('phone', 'Vencimiento L.N.C.') !!}
                            {!! Form::date('expire_license', null, ['class' => 'form-control', 'placeholder' => 'Ej: 297111222']) !!}
                        </div>

                    </div>


                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ej: ejemplo@gmail.com']) !!}

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('password', 'Contraseña') !!}

                                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('confirm-password', 'Confirmar Contraseña') !!}
                                {!! Form::password('confirm-password', ['class' => 'form-control']) !!}

                            </div>

                        </div>
                    </div>

                    {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-danger" type="submit">Cancelar</a>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>


@endsection
