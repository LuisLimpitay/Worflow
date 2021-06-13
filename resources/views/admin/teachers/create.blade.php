@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Crear un Nuevo Instructor</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary card-outline">
            <div class="card-body">

            {!! Form::open(['route' => 'admin.teachers.store', 'autocomplete' => 'off']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Apellido y Nombre' ) !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el Apellido y Nombre']) !!}
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        {!! Form::label('email', 'Email' ) !!}
                        {!! Form::email('email', null, ['class'=> 'form-control', 'placeholder' => 'Ej: ejemplo@gmail.com']) !!}
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                  {!! Form::label('about', 'Acerca de' ) !!}
                  {!! Form::text('about', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese descripcion del Instructor']) !!}
                    @error('about')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror

              </div>


                {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
                <a href="{{route('admin.teachers.index')}}" class="btn btn-danger" type="submit">Cancelar</a>

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
    <script> console.log('Hi!'); </script>
@stop
