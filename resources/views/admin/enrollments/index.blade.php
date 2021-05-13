@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de Inscripciones</h1>
@stop


@section('content')
<div class="card">

    <div class="card-header">
        <a class="btn btn-primary" href="#">Crear</a>
    </div>
    
    <div class="body">
        <table class="table table-striped">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Fecha del Curso</th>

                    <th>Apellido y Nombre Cliente</th>
                    <th>N° Lic de Conducir</th>
                    <th>Metodo de pago</th>
                    
                    <th>Estado del pago</th>
                </thead>

                <tbody>
                    @foreach ($enrollments as $enrollment)
                        <tr>

                            <td>{{$enrollment->id}}</td>
                            <td>{{$enrollment->dictations->date}}</td>

                            <td>{{$enrollment->dictations->users->last_name}}, {{$enrollment->dictations->users->name}} </t>
                            <td>{{$enrollment->dictations->users->number_license}}</td>
                            <td>{{$enrollment->payment_method}}</td>

                            <td>{{$enrollment->status}}</td>
                     
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>



@stop
