@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Small Box (Stat card) -->
            <h5 class="mb-2 mt-4">Small Box</h5>
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            @if ($pivots->count() > 1)
                                <p>Ordenes de Compra</p>
                            @else
                                <p>Orden de Compra</p>
                            @endif
                            <h3>{{$pivots->count()}}</h3>

                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="{{route('admin.orders.index')}}" class="small-box-footer">
                            Mas Informacion <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$dictations->count()}}<sup style="font-size: 20px"></sup></h3>

                            <p>Dictados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('admin.dictations.index')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$customers->count()}}</h3>

                            <p>Clientes Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <a href="{{route('admin.customers.index')}}" class="small-box-footer">
                            Mas Informacion <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- Small Box (End card)-->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->
    <footer class="">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0
        </div>
    </footer>
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

