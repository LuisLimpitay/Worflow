@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Administrador</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($dictation, ['route' => [ 'admin.dictations.update', $dictation], 'method' => 'put' ]) !!}
            
              
                <div class="form-group">
                    {!! Form::label('date', 'Fecha' ) !!}
                    {!! Form::date('date', null, ['class'=> 'form-control', 'min' => '2021-03-06' ]) !!}
                </div>
  
                    <div class="form-group">
                    {!! Form::label('time', 'Hora') !!}
                    {!! Form::time('time', null, ['class'=> 'form-control','min' => '06:00', 'max' =>'18:00' ]) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('stock', 'Cupos' ) !!}
                    {!! Form::number('stock', null, ['class'=> 'form-control', 'min' => '1', 'max' => '50' ]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('course_id', 'Nombre del Curso' ) !!}
                    {!! Form::select('course_id', $courses, null, ['class' => 'form-control' ]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('place_id', 'Lugar' ) !!}
                    {!! Form::select('place_id', $places    , null, ['class' => 'form-control' ]) !!}
                </div>

             

            
            
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

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