@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')
    <p class="text-xl">Gestion de Clientes</p>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Clientes | Lista</h3>
                            <div class="card-tools">
                                <a class="btn btn-success" href="{{route('admin.customers.create')}}"><i
                                    class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-customer" class="table table-striped table-responsive-lg">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Apellido y Nombre</th>
                                        <th>Telefono Celular</th>
                                        <th>Vencimiento L.N.C.</th>
                                        <th>Email</th>
                                        <th width="80px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{$customer->id}}</td>
                                        <td>{{$customer->last_name}} , {{$customer->name}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->expire_license}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('admin.customers.edit',$customer) }}"><i
                                                class="fas fa-edit"></i></a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['admin.customers.destroy', $customer],'style'=>'display:inline']) !!}
                                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tfoot>
                            </table>
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
@endsection


@section('js')
    <script>
        $(function () {

            $('#table-customer').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>
@stop
