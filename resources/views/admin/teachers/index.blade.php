@extends('adminlte::page')

@section('title', 'Instructores')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Lista de Instructores</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif 

<div class="card">

    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.teachers.create')}}">Crear</a>
    </div>
    
    <div class="body">
        <table class="table table-striped table-responsive">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acerca de</th>
                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>

                            <td>{{$teacher->id}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->about}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.teachers.edit', $teacher)}}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.teachers.destroy', $teacher)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>

@stop