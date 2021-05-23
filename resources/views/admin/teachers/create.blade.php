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
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.teachers.store', 'autocomplete' => 'off']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Apellido y Nombre' ) !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el Apellido y Nombre del Instructor']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group">
                  {!! Form::label('about', 'Acerca de' ) !!}
                  {!! Form::text('about', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el nombre de la Ciudad']) !!}

                  @error('about')
                      <span class="text-danger">{{$message}}</span>
                  @enderror

              </div>
            <div class="form-group">
                {!! Form::label('email', 'Email' ) !!}
                {!! Form::email('email', null, ['class'=> 'form-control', 'placeholder' => 'Ej. ejemplo@gmail.com']) !!}

                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror


                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}


        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
