@extends('adminlte::page')

@section('title', 'Cursos')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')
@stop

@section('content')
    <!-- Main content -->
    <a href="{{route('admin.courses.create')}}">Crear</a>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Courses Managment</h3>
                            <div class="card-tools">
                                <br>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-course" class="table table-striped table-responsive">
                                <thead class="thead-dark">
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Instructor</th>
                                    <th>Modalidad</th>
                                    <th>Precio </th>
                                    <th width="80px">Action</th>
                                </thead>

                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td> {{ $course->name }} </td>
                                            <td> {{ $course->description }} </td>
                                            <td> {{ $course->teachers->name }}</td>
                                            <td> {{ $course->mode }}</td>
                                            <td> {{ $course->price }}</td>
                                            <td width="10px">
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('admin.courses.edit', $course) }}"><i
                                                        class="fas fa-edit"></i></a>
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

            $('#table-course').DataTable({
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
