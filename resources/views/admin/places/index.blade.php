@extends('adminlte::page')

@section('title', 'Ciudades')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@endsection

@section('content_header')
    <h1>Sedes se dictan Cursos</h1>
@endsection

@section('content')

{{-- @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif 
 --}}
<div class="card">

    <div class="card-header">
        <a class="btn btn-success" href="{{route('admin.places.create')}}">
            <i class="fas fa-plus-square"></i></a>
    </div>
    
    <div class="body">
        <table class="table table-striped">
                <thead class="thead-dark">
                    <th>Nombre de la Sede</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th colspan="2">Acciones</th>
                </thead>

                <tbody>
                    @foreach ($places as $place)
                        <tr>

                            <td>{{$place->name}}</td>
                            <td>{{$place->address_street}} N° {{$place->address_number}}</td>
                            <td>{{$place->city}}</td>

                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.places.edit', $place)}}">
                                    <i class="fas fa-edit"></i></a>
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.places.destroy', $place)}}"
                                    class="form-eliminar" method="POST">
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
    
    @if (session('info') == 'Sede eliminada con Exito !')
        <script>
            Swal.fire(
                'Eliminado!',
                'La sede se eliminó con éxito.',
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
                title: 'Estas seguro que deseas eliminar la sede del curso ?',
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


