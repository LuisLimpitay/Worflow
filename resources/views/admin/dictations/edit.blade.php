@extends('adminlte::page')

@section('title', 'Dictados')

@section('content_header')
    <h1>Editar Dictado</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-body">

                    {!! Form::model($dictation, ['route' => ['admin.dictations.update', $dictation], 'method' => 'put']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('date', 'Fecha') !!}
                                {!! Form::date('date', null, ['class' => 'form-control', 'id' => 'date']) !!}
                                @error('date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('time', 'Hora') !!}
                                {!! Form::time('time', null, ['class' => 'form-control']) !!}
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
                                {!! Form::number('stock', null, ['class' => 'form-control']) !!}
                                @error('stock')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('course_id', 'Nombre del Curso') !!}
                                {!! Form::select('course_id', $courses, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        {!! Form::label('place_id', 'Sede') !!}
                        {!! Form::select('place_id', $places, null, ['class' => 'form-control']) !!}

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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
        $(function() {
            $("#date").datepicker({
                minDate: 1,
                changeMonth: true,
                changeYear: true,
                dateFormat: "yy-mm-dd"

            });
        });


    </script>

@stop
