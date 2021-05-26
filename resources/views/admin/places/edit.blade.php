@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Editar Ciudades</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif 

<div class="card">
    <div class="card-body">

        {!! Form::model($place, ['route' => ['admin.places.update', $place ], 'method' => 'put']) !!}
        
        <div class="form-group">
            {!! Form::label('name', 'Nombre de la Sede' ) !!}
            {!! Form::text('name', null, ['class'=> 'form-control']) !!}
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> 
           
        <div class="form-group">
            {!! Form::label('address_street', 'Direccion' ) !!}
            {!! Form::text('address_street', null, ['class'=> 'form-control']) !!}
            @error('address_street')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>    
        <div class="form-group">
            {!! Form::label('address_number', 'Numero' ) !!}
            {!! Form::text('address_number', null, ['class'=> 'form-control']) !!}
            @error('address_number')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>  
        
        <div class="form-group">
            {!! Form::label('city', 'Nombre de la Ciudad' ) !!}
            {!! Form::text('city', null, ['class'=> 'form-control']) !!}
            @error('city')
                <span class="text-danger">{{$message}}</span>
            @enderror
    
        </div> 

            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
            <a href="{{route('admin.places.index')}}" class="btn btn-danger" type="submit">Cancelar</a>

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