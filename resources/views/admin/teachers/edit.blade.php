@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Editar Datos del Instructor</h1>
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

            {!! Form::model($teacher, ['route' => ['admin.teachers.update', $teacher], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre del Instructor') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('about', 'Acerca de') !!}
                {!! Form::text('about', null, ['class' => 'form-control']) !!}
                @error('about')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
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
    <script>
        console.log('Hi!');

    </script>
@stop
