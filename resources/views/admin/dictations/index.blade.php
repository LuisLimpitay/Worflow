@extends('adminlte::page')

@section('title', 'Dictados')

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
                            <h3 class="card-title">Gestor de Dictados</h3>
                            <div class="card-tools">
                                <a class="btn btn-success" href="{{ route('admin.dictations.create') }}"><i
                                        class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-order" class="table table-striped table-responsive-sm">
                                <thead class="thead-dark">
                                    <th>Fecha</th>
                                    <th>Sede</th>
                                    <th>Direccion</th>
                                    <th>Ciudad</th>
                                    <th>Hora</th>
                                    <th>Cupos</th>
                                    <th>Estado</th>

                                    <th width="80px">Action</th>
                                </thead>

                                <tbody>
                                    @foreach ($dictations as $dictation)

                                        <tr>
                                            <td> {{\Carbon\Carbon::parse($dictation->date)->format('d/m/Y')}} </td>
                                            <td>{{ $dictation->places->name }}</td>
                                            <td>{{ $dictation->places->address_street }}
                                                {{ $dictation->places->address_number }}</td>
                                            <td>{{ $dictation->places->city }}</td>
                                            <td>{{ $dictation->time }} </td>

                                            <td class="text-center"> {{ $dictation->stock }}</td>

                                            <td>
                                                @if ($dictation->status == 'activo')
                                                    <p class="badge badge-success">Activo</p>
                                                @else
                                                    <p class="badge badge-danger"><b>Completo</b></p>
                                                @endif
                                            </td>


                                            <td>
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('admin.dictations.edit', $dictation) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                {!! Form::open(['method' => 'DELETE', 'class' => 'form-eliminar', 'route' => ['admin.dictations.destroy', $dictation], 'style' => 'display:inline']) !!}
                                                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) }}
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
        $(function() {

            $('#table-order').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": true,
                "responsive": true,
            });
        });

    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('info') == 'Dictado eliminado con Exito !')
        <script>
            Swal.fire(
                'Eliminado!',
                'El dictado del curso se elimino con éxito.',
                'success'
            )

        </script>
    @endif

    <script>
        /*lo que hago es seleccionar esa clase $('.form-eliminar')  y le digo que cuando traten de enviar el form
                    haga la siguiente accion .submit(function(e){
                        lo primero que se necesita es capturar el evento y lo hace con la letra e
                        e.preventDefault();
                    })
                    y logro detener el envio del form*/
        $('.form-eliminar').submit(function(e) {
            e.preventDefault();
            //luego le paso el alert
            Swal.fire({
                title: 'Estas seguro que deseas eliminar el dictado del curso ?',
                text: "No podras revertirlo",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    this
                .submit(); //luego en mi controlador pongo msj de sesion y luego lo reciboantes del alert
                }
            })
        });

    </script>

@stop
