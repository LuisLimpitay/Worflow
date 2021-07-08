@extends('adminlte::page')

@section('title', 'Dictados')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <p class="text-xl">Gestor de Dictados</p>
@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-lg">Dictados | Lista</h3>
                            <div class="card-tools">
                                <a class="btn btn-success" href="{{ route('admin.dictations.create') }}"><i
                                        class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-place" class="table table-striped table-responsive-sm">
                                <thead class="thead-dark">
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Ciudad</th>
                                    <th>Asistentes</th>
                                    <th>Cupos</th>
                                    <th>Estado</th>
                                    <th width="120px">Accion</th>
                                </thead>
                                <tbody>
                                    @foreach ($dictations as $dictation)
                                        <tr>
                                            <td>{{ $dictation->id }}</td>
                                            <td> {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }} </td>
                                            <td>{{ $dictation->places->city->name }}</td>
                                            <td>
                                                <span class="badge bg-warning">{{ $dictation->users->count() }}</span>
                                            </td>
                                            <td><span class="badge bg-info">{{ $dictation->stock }}</span></td>
                                            <td>
                                                @if ($dictation->status == 'activo')
                                                    <p class="badge badge-success">Activo</p>
                                                @else
                                                    <p class="badge badge-danger"><b>Completo</b></p>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-warning btn-sm"
                                                    href="{{ route('admin.dictations.show', $dictation) }}"><i
                                                        class="far fa-eye"></i></a>
                                                @if ($dictation->users->count() < 1)
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('admin.dictations.edit', $dictation) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    {!! Form::open(['method' => 'DELETE', 'class' => 'form-eliminar', 'route' => ['admin.dictations.destroy', $dictation], 'style' => 'display:inline']) !!}
                                                    {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) }}
                                                    {!! Form::close() !!}
                                                @endif


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
                "info": true,
                "autoWidth": true,
                "responsive": true,

                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por pagina",
                    "zeroRecords": "No hay registro para mostrar",
                    "info": "Mostrando la pagina _PAGE_ de _PAGES_",
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

    @if (session('info') == 'Dictado eliminado con Exito !')
        <script>
            Swal.fire(
                'Eliminado!',
                'El dictado del curso se elimino con éxito.',
                'success'
            )

        </script>
    @elseif (session('info') == 'Dictado actualizado con Exito !')
        <script>
            Swal.fire(
                'Actualizado!',
                'El dictado del curso se actualizo con éxito..',
                'success'
            )

        </script>

    @endif
    @if (session('info') == 'Dictado creado con Exito !')
        <script>
            Swal.fire(
                'Exito !',
                'El dictado del curso se creo correctamente.',
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
