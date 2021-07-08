@extends('adminlte::page')

@section('title', 'Ciudades')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <p class="text-xl">Gestor de Sedes</p>
@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-lg ">Sedes | Lista</h3>
                            <div class="card-tools">
                                <a class="btn btn-success" href="{{ route('admin.places.create') }}"><i
                                        class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-place" class="table table-striped table-responsive-lg">
                                <thead class="thead-dark">
                                    <th>#</th>
                                    <th>Sede</th>
                                    <th>Direccion</th>
                                    <th>Ciudad</th>
                                    <th width="80px">Action</th>
                                </thead>

                                <tbody>
                                    @foreach ($places as $place)
                                        <tr>
                                            <td>{{ $place->id }}</td>
                                            <td>{{ $place->name }}</td>
                                            <td>{{ $place->address_street }} N° {{ $place->address_number }}</td>
                                            <td>{{ $place->city->name }}</td>

                                            <td>
                                                {{-- Mostrar los ICONOS de una Sede la cual no tenga asignado ningun dictado. --}}
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('admin.places.edit', $place) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                {!! Form::open(['method' => 'DELETE', 'class' => 'form-eliminar', 'route' => ['admin.places.destroy', $place], 'style' => 'display:inline']) !!}
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
            $('#table-place').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por pagina",
                    "zeroRecords": "No hay registro para mostrar",
                    "info": "Mostrando la pagina _PAGE_ de _PAGES_ paginas",
                    "infoEmpty": "",
                    "infoFiltered": "(Filtrando de _MAX_ registros)",
                    'search': "Buscar",
                    'paginate': {
                        'next': 'Siguiente',
                        'previous': 'Anterior'
                    }
                }
            });
        });
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('info') == 'Sede eliminada con éxito !')
        <script>
            Swal.fire(
                'Eliminado!',
                'Sede eliminada con éxito.',
                'success'
            )
        </script>
    @elseif(session('info') == 'Sede actualizada con éxito !')
        <script>
            Swal.fire(
                'Actualizado!',
                'Sede actualizada con éxito.',
                'success'
            )
        </script>

    @endif
    Instructor actualizado con exito !
    @if(session('info') == 'Sede creada con éxito !')
        <script>
            Swal.fire(
                'Exito!',
                'Sede creada sastifactoriamente.',
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
                title: 'Estas seguro que deseas eliminar la Sede ?',
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
