@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Detalles de Curso</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre del Curso') !!}
                                {!! Form::text('name', $course->name, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('mode', 'Modalidad') !!}
                                {!! Form::text('mode', $course->mode, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Descripcion') !!}
                        {!! Form::text('description', $course->description, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('content', 'Contenido') !!}
                        {!! Form::textarea('content', $course->content, ['class' => 'form-control']) !!}
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('price', 'Precio') !!}
                                {!! Form::number('price', $course->price, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Instructor') !!}
                                {!! Form::text('name', $course->teachers->name, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>



                    <a href="{{ route('admin.courses.index') }}" class="btn btn-danger" type="submit">Volver</a>


                </div>
            </div>
        @stop

        @section('js')
            <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $("#name").stringToSlug({
                        setEvents: 'keyup keydown blur',
                        getPut: '#slug',
                        space: '-'
                    });
                });

            </script>

        @endsection
