@extends('adminlte::page')

@section('title', 'Curso')

@section('content_header')
    <h1>Editar Curso</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-body">

                    {!! Form::model($course, ['route' => ['admin.courses.update', $course], 'autocomplete' => 'off', 'method' => 'put']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('name', 'Nombre del Curso') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                {!! Form::label('slug', 'Slug') !!}
                                {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        {!! Form::label('description', 'Descripcion') !!}
                        {!! Form::text('description', null, ['class' => 'form-control']) !!}
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('content', 'Contenido') !!}
                        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('mode', 'Modalidad') !!}
                                {!! Form::text('mode', null, ['class' => 'form-control']) !!}
                                @error('mode')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('price', 'Precio') !!}
                                {!! Form::number('price', null, ['class' => 'form-control']) !!}
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('teacher_id', 'Instructor') !!}
                        {!! Form::select('teacher_id', $teachers, null, ['class' => 'form-control']) !!}
                        @error('teacher_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-danger" type="submit">Cancelar</a>

                    {!! Form::close() !!}


                </div>
            </div>
        @stop
