@extends('adminlte::page')

@section('title', 'Dictados')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Lista de Dictados de Cursos</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif 

<div class="card">

    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.dictations.create')}}">Crear</a>
    </div>
    
    <div class="body">
        <table class="table table-striped table-responsive-sm">
                <thead class="thead-dark">
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Lugar</th>
                    <th>Duracion</th>
                    <th>Cupos</th>
                    <th>Users</th>

                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($dictations as $dictation)

                        <tr>
                            <td> {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y')}} </td>
                            <td> {{$dictation->time}} </td>
                            
                            <td> {{$dictation->courses->categories->name}}</td>
                            <td> {{$dictation->duration}} hs</td>
                            <td> {{$dictation->stock}}</td>
                            
                                
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.dictations.edit', $dictation)}}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.dictations.destroy', $dictation)}}" method="POST">
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