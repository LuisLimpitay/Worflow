@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content')
Panel de Administracion
@endsection

@section('js')
<script>
    $(function () {
        $('#table-user').DataTable({
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
@stop

