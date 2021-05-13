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

            {!! Form::open(['route' => 'admin.teachers.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre y Apellido' ) !!}
                    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el nombre de la Ciudad']) !!}

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
                {!! Form::label('direction', 'Direccion' ) !!}
                {!! Form::text('direction', null, ['class'=> 'form-control', 'placeholder' => 'Ej. Av. Jujuy 322']) !!}

                @error('direction')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
              <div class="form-group">
                  {!! Form::label('city', 'Ciudad' ) !!}
                  {!! Form::text('city', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el nombre de la Ciudad']) !!}

                  @error('city')
                      <span class="text-danger">{{$message}}</span>
                  @enderror

              </div>



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
