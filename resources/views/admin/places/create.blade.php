@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Agregar Lugares de Dictado</h1>
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

            {!! Form::open(['route' => 'admin.places.store', 'autocomplete' => 'off']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre de la Sede' ) !!}
                {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('address_street', 'Direccion' ) !!}
                        {!! Form::text('address_street', null, ['class'=> 'form-control']) !!}
                        @error('address_street')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('address_number', 'Numero' ) !!}
                        {!! Form::text('address_number', null, ['class'=> 'form-control']) !!}
                        @error('address_number')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>

                <div class="form-group">
                    {!! Form::label('city', 'Ciudad' ) !!}
                    {!! Form::text('city', null, ['class'=> 'form-control', 'placeholder' => 'Nombre de la Ciudad']) !!}

                    @error('city')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
                <a href="{{route('admin.places.index')}}" class="btn btn-danger" type="submit">Cancelar</a>

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
