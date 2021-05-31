@extends('adminlte::page')

@section('title', 'Dictados')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Dictado de Cursos</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn-success" href="{{ route('admin.dictations.create') }}"><i
                    class="fas fa-plus-square"></i></a>
        </div>

        <div class="body">
            <table id="example3" class="table table-striped table-responsive-sm">
                <thead class="thead-dark">
                    <th>Fecha</th>
                    <th>Sede</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Hora</th>
                    <th>Cupos</th>
                    <th>Estado</th>

                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($dictations as $dictation)

                        <tr>
                            <td> {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }} </td>
                            <td>{{ $dictation->places->name }}</td>
                            <td>{{ $dictation->places->address_street }} {{ $dictation->places->address_number }}</td>
                            <td> {{ $dictation->places->city }}</td>
                            <td> {{ $dictation->time }} </td>

                            <td class="text-center"> {{ $dictation->stock }}</td>

                            <td class="text-center"><span class="badge badge-secondary">{{ $dictation->status }}</span>
                            </td>

                            <td width="5px ">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.dictations.edit', $dictation) }}"><i
                                        class="fas fa-edit"></i></a>
                            </td>

                            <td width="5px">
                                <form action="{{ route('admin.dictations.destroy', $dictation) }}" class="form-eliminar"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-trash-alt"></i></button>
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
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script>
    
    $('#example3').DataTable({
        responsive:true
    });

</script> --}}

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if (session('eliminar') == 'Dictado eliminado con Exito !')
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

                    this.submit(); //luego en mi controlador pongo msj de sesion y luego lo reciboantes del alert
                }
            })

        });

    </script>
@stop
@endsection
