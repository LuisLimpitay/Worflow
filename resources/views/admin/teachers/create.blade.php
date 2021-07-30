@extends('adminlte::page')

@section('title', 'Instructores')

@section('content_header')
    <h1>Instructor | Crear</h1>
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

                    {!! Form::open(['route' => 'admin.teachers.store', 'autocomplete' => 'off']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('last_name', 'Apellido') !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Apellido']) !!}
                                @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre']) !!}
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('about', 'Acerca de') !!}
                        {!! Form::text('about', null, ['class' => 'form-control', 'placeholder' => 'Ingrese descripcion del Instructor']) !!}
                        @error('about')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <br>
                    <hr>

                    {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('admin.teachers.index') }}" class="btn btn-danger" type="submit">Cancelar</a>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
