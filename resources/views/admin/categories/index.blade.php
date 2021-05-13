@extends('adminlte::page')

@section('title', 'Categorias')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection
@section('content_header')
    <h1>Listado de Categorias</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif 

<div class="card">

    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.categories.create')}}">Crear</a>
    </div>
    
    <div class="body">
        <table class="table table-striped">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Nombre</th>

                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>

                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                   
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
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