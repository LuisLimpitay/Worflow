@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Planillas Managment</h3>
                            <div class="card-tools">
                                <a class="btn btn-success" href="#"><i
                                        class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-planilla" class="table table-striped">
                                <thead class="thead-dark">
                                <th>Id Dictado</th>
                                <th>Fecha del Curso</th>
                                <th>Ciudad</th>
                                <th>N° Inscriptos</th>
                                <th width="80px">Action</th>

                                </thead>
                                <tbody>
                                @foreach ($dictations as $dictation)
                                    <tr>
                                        <td>{{$dictation->id}}</td>
                                        <td>{{$dictation->date->format('d M Y')}}</td>
                                        <td>{{$dictation->places->city}}</td>
                                        <td>
                                            <h3 class="badge badge-secondary">
                                                Usuarios <span class="badge badge-light">{{$dictation->users->count()}}</span>
                                            </h3>
                                        </td>

                                        {{-- <td>
                                            <ul>
                                                @foreach ($dictation->users as $user)
                                                    <li>{{$loop->count}}</b></li>
                                                @endforeach
                                            </ul>
                                        </td> --}}

                                        <td>
                                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal">
                                                <i class="far fa-eye"></i></a>

                                            {!! Form::open(['method' => 'DELETE', 'class' => 'form-eliminar', 'route' => ['admin.dictations.destroy', $dictation], 'style' => 'display:inline']) !!}
                                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) }}
                                            {!! Form::close() !!}
                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@stop



@section('js')
    <script>
        $(function () {

            $('#table-planilla').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    @include('admin.planillas.show')

@stop
