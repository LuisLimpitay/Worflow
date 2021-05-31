@extends('adminlte::page')

@section('title', 'Instructores')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Lista de Instructores</h1>
@stop

@section('content')

{{-- @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif 
 --}}
<div class="card">

    <div class="card-header">
        <a class="btn btn-success" href="{{route('admin.teachers.create')}}"><i
            class="fas fa-plus-square"></i></a>
    </div>
    
    <div class="body">
        <table class="table table-striped table-responsive">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acerca de</th>
                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>

                            <td>{{$teacher->id}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->about}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.teachers.edit', $teacher)}}"><i
                                    class="fas fa-edit"></i></a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.teachers.destroy', $teacher)}}"
                                class="form-eliminar"
                                method="POST">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>



@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if (session('info') == 'Instructor eliminado con éxito!')
        <script>
            Swal.fire(
                'Eliminado!',
                'El Instructor se eliminó con éxito.',
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
                title: 'Estas seguro que deseas eliminar un Instructor?',
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

