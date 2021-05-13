@extends('adminlte::page')

@section('title', 'Instructores')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Lista de Clientes</h1>
@stop

@section('content')
<div class="card">

    <div class="card-header">
        <a class="btn btn-primary" href="{{route('register')}}">Crear</a>
    </div>
    
    <div class="body">
        <table class="table table-striped">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Apellido y Nombre</th>
                    <th>Email</th>
                    <th>N° Lic de Conducir</th>

                    <th>Lic Nac de Conducir</th>
                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>

                            <td>{{$user->id}}</td>
                            <td>{{$user->last_name}}, {{$user->name}} </td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->number_license}}</td>

                            <td>{{ \Carbon\Carbon::parse($user->expire_license)->format('d/m/Y')}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.users.destroy', $user)}}" method="POST">
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