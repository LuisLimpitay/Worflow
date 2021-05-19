@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1>Panel de Inscripciones</h1>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')

<div class="card">
    
    <div class="body">

        <table id="example" class="table table-striped">
                <thead class="thead-dark">
                    <th>Fecha del Curso</th>
                    <th>Lugar</th>
                    <th>Apellido y Nombre Cliente</th>
                    <th>N° Lic de Conducir</th>
                    <th>Metodo de pago</th>
                    
                    <th>Estado del pago</th>
                </thead>
                <tbody>
                    @foreach ($enrollments as $enrollment)
                        <tr>

                            <td> {{ \Carbon\Carbon::parse($enrollment->dictations->date)->format('d/m/Y')}} </td>
                            <td>{{$enrollment->dictations->places->city}}</td>
                            <td>{{$enrollment->users->last_name}}, {{$enrollment->users->name}}</td>
                            <td>{{$enrollment->users->number_license}}</td>

{{--aca deberia hacer para algo para poder cambiar el estado del pago
 --}}                       <td>{{$enrollment->payment_method}}</td>

                            <td>{{$enrollment->status}}</td>
                     
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>



@stop


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script>
    
    $('#example').DataTable({
        responsive:true,
        autoWidth:false
    });
</script>
@endsection