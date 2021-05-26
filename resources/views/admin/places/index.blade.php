@extends('adminlte::page')

@section('title', 'Ciudades')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Sedes se dictan Cursos</h1>
@endsection

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif 

<div class="card">

    <div class="card-header">
        <a class="btn btn-success" href="{{route('admin.places.create')}}">Crear</a>
    </div>
    
    <div class="body">
        <table class="table table-striped">
                <thead class="thead-dark">
                    <th>Nombre de la Sede</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($places as $place)
                        <tr>

                            <td>{{$place->name}}</td>
                            <td>{{$place->address_street}} N° {{$place->address_number}}</td>
                            <td>{{$place->city}}</td>

                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.places.edit', $place)}}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.places.destroy', $place)}}" method="POST">
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

@endsection
