@extends('adminlte::page')

@section('title', 'Dictados')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Lista de Dictados de Cursos</h1>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

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
        <table id="example3" class="table table-striped table-responsive-sm">
                <thead class="thead-dark">
                    <th>Fecha</th>
                    <th>Lugar</th>

                    <th>Hora</th>
                    <th>i</th>
                    <th>Cupos</th>

                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($dictations as $dictation)

                        <tr>
                            <td> {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y')}} </td>
                            <td>{{$dictation->places->address_street}} {{$dictation->places->address_number}}, {{$dictation->places->city}}</td>
                            <td> {{$dictation->time}} </td>
                            
                            <td> {{$dictation->courses->categories->name}}</td>
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


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script>
    
    $('#example3').DataTable({
        responsive:true
    });

</script>
@endsection