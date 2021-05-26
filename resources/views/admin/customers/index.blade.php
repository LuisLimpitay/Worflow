@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
<div class="card">
    
    <div class="body">
        
        <table id=example class="table table-striped">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Apellido y Nombre</th>
                    <th>Email</th>

                    <th>N° L.N.C.</th>
                    <th>Venc. L.N.C.</th>

                    
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>

                            <td>{{$user->id}}</td>
                            <td>{{$user->last_name}}, {{$user->name}}</td>
                            <td>{{$user->email}}</td>

                            <td>{{$user->number_license}}</td>
                            <td>{{ \Carbon\Carbon::parse($user->expire_license)->format('d/m/Y')}}</td>
                                                        
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