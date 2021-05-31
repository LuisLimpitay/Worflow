@extends('adminlte::page')

@section('title', 'Cursos')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Lista de Cursos</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">

    <div class="card-header">
        <a class="btn btn-success" href="{{route('admin.courses.create')}}"><i class="fas fa-plus-square"></i></a>
    </div>

    <div class="body">
        <table class="table table-striped table-responsive">
                <thead class="thead-dark">
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Instructor</th>
                    <th>Modalidad</th>
                    <th>Precio </th>

                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($courses as $course)

                        <tr>
                            <td> {{$course->name}} </td>
                            <td> {{$course->description}} </td>

                            <td> {{$course->teachers->name  }}</td>
                            <td> {{$course->mode }}</td>
                            <td> {{$course->price}}</td>


                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.courses.edit', $course)}}"><i class="fas fa-edit"></i></a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.courses.destroy', $course)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>


                    @endforeach

                </tbody>
        </table>
    </div>
</div>
@stop

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire
    ({
        icon: 'warning',
        title: 'Atencion',
        text: 'Something went wrong!',
        footer: '<a href="">Why do I have this issue?</a>'
    })
</script>
@stop