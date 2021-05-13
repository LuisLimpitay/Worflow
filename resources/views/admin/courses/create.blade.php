@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Crear Curso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.courses.store']) !!}

                <div class="form-group">

                    {!! Form::label('name', 'Nombre del Curso' ) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Curso' ]) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">

                    {!! Form::label('slug', 'Slug' ) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripcion' ) !!}
                    {!! Form::text('description', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la descripcion del Curso' ]) !!}
                    @error('description')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                    <div class="form-group">
                    {!! Form::label('content', 'Contenido') !!}
                    {!! Form::textarea('content', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la el contenido del curso' ]) !!}
                    @error('content')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Precio en ARS $' ) !!}
                    {!! Form::number('price', null, ['class'=> 'form-control', 'placeholder' => 'EJ: 2.000']) !!}
                    @error('price')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>


                <div class="form-group">

                    {!! Form::label('category_id', 'Categoria' ) !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una Categoria' ]) !!}
                    @error('category_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('teacher_id', 'Instructor' ) !!}
                    {!! Form::select('teacher_id', $teachers, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Instructor' ]) !!}
                    @error('teacher_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
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
