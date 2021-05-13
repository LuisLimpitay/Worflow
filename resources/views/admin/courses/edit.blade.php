@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Editar Curso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($course, ['route' => [ 'admin.courses.update', $course], 'method' => 'put' ]) !!}

                <div class="form-group">

                    {!! Form::label('name', 'Nombre del Curso' ) !!}
                    {!! Form::text('name', null, ['class' => 'form-control' ]) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('slug', 'Slug' ) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripcion' ) !!}
                    {!! Form::text('description', null, ['class'=> 'form-control' ]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', 'Contenido') !!}
                    {!! Form::textarea('content', null, ['class'=> 'form-control' ]) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Precio' ) !!}
                    {!! Form::number('price', null, ['class'=> 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('teacher_id', 'Instructor' ) !!}
                    {!! Form::select('teacher_id', $teachers, null, ['class' => 'form-control' ]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Categoria' ) !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control' ]) !!}
                </div>

                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}


        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection
