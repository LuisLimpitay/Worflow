@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Formulario de creacion de un dictado</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-body">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">* {{ $error }}</p>
                        @endforeach
                    @endif

                    {!! Form::open(['route' => 'admin.dictations.store']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                {!! Form::label('date', 'Fecha') !!}
                                {!! Form::date('date', null, ['class' => 'form-control', 'min' => '2021-05-31']) !!}
                                @error('date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('time', 'Hora') !!}
                                {!! Form::time('time', null, ['class' => 'form-control', 'min' => '08:00', 'max' => '18:00']) !!}
                                @error('time')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('stock', 'Cupos') !!}
                                {!! Form::number('stock', null, ['class' => 'form-control', 'min' => '1', 'max' => '50', 'placeholder' => 'Numero de cupos']) !!}
                                @error('stock')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('course_id', 'Curso') !!}
                                {!! Form::select('course_id', $courses, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Curso']) !!}
                                @error('course_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('place_id', 'Sede') !!}
                        {!! Form::select('place_id', $places, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una Sede']) !!}
                        @error('place_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('admin.dictations.index') }}" class="btn btn-danger" type="submit">Cancelar</a>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
@stop


@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire(
            'Atención!',
            'Una vez creado el dictado no podras editar el numero de cupos, el nombre del curso y la sede',
            'warning'
        )

    </script>
@stop
