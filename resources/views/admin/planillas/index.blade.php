@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1>Planilla de Inscirptos</h1>
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
                    <th>Id Dictado</th>
                    <th>Fecha del Curso</th>
                    <th>Ciudad</th>
                    <th>N° Inscriptos</th>
                   
                    <th>Total Inscriptos</th>
             
                </thead>
                <tbody>
                    @foreach ($dictations as $dictation)
                    <tr>
                        <td>{{$dictation->id}}</td>
                        <td>{{\Carbon\Carbon::parse($dictation->date)->format('d/m/Y')}}</td>
                        <td>{{$dictation->places->city}}</td>
                        <td>X
                            {{-- <ul>
                                @foreach ($dictation->users as $user)
                                    <li>{{$user->count()}}</b></li>
                                @endforeach
                            </ul> --}}
                        </td> 
                        
                        <td width="5px ">
                            <a class="btn btn-primary btn-sm"
                                href="{{ route('admin.planillas.details', $dictation->id) }}"><i
                                    class="fas fa-edit"></i></a>
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
    
    $('#example').DataTable({
        responsive:true,
        autoWidth:false
    });
</script>

@endsection