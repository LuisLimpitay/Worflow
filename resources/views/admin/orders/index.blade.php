@extends('adminlte::page')

@section('title', 'Ordenes')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <p class="text-xl">Gestion de Ordenes</p>
@endsection

@section('content')

    <!-- Main content -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="text-right">

                        </div>
                        <div class="card-header">
                            <h3 class="card-title">Ordenes de Compra | Lista</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="table-order" class="table table-striped table-responsive-lg">
                                <thead class="thead-dark">

                                    <th>#</th>
                                    <th>Fecha </th>
                                    <th>Cliente</th>
                                    <th>Email</th>
                                    <th>Forma de Pago</th>

                                    <th>Estado</th>
                                    <th width="120px">Accion</th>

                                </thead>
                                <tbody>
                                    {{-- $enrollment es como si seria mi dictation --}}

                                    @foreach ($pivots as $pivot)

                                        <tr>
                                            <td>{{ $pivot->id }}</td>
                                            <td>{{$pivot->created_at->format('d/m/Y')}}</td>

                                            <td>{{ $pivot->user->last_name }}, {{ $pivot->user->name }}</td>
                                            <td>{{$pivot->user->email }}</td>
                                            <td>{{ $pivot->payment->name }}</td>
                                            <td>
                                                @if ($pivot->status == 'aprobado')
                                                    <p class="badge badge-success ">Aprobado</p>
                                                @else
                                                    <p class="badge badge-danger"><b>Pendiente</b></p>
                                                @endif
                                            </td>

                                            <td>
                                                <a class="btn btn-warning btn-sm"
                                                   href="{{ route('admin.orders.show', $pivot) }}"><i
                                                        class="far fa-eye"></i></a>
                                                @if ($pivot->status == 'pendiente')
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('admin.orders.edit', $pivot) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                @endif

                                                {!! Form::open(['method' => 'DELETE', 'class' => 'form-eliminar', 'route' => ['admin.orders.destroy', $pivot], 'style' => 'display:inline']) !!}
                                                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) }}
                                                {!! Form::close() !!}
                                            </td>

                                            {{-- aca deberia hacer para algo para poder cambiar el estado del pago --}}

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

@stop


@section('js')
    <script>
        $(function() {

            $('#table-order').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
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

    @if (session('info') == 'Orden eliminada correctamente !')
        <script>
            Swal.fire(
                'Eliminado!',
                'La orden de inscripcion se elimino con  exito!.',
                'success'
            )

        </script>
    @elseif(session('info') == 'Orden actualizada correctamente !')
        <script>
            Swal.fire(
                'Actualizado!',
                'El estado del pago se actualizo correctamente.',
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
                title: 'Estas seguro que deseas eliminar la orden de compra ?',
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
