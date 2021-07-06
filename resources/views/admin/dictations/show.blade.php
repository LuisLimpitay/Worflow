@extends('adminlte::page')

@section('title', 'Dictado')

@section('content_header')
    <h1>Detalles del Dictado</h1>
@stop

@section('content')

    <div class="card card-primary card-outline">
        <div class="card-body">

            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('date', 'Fecha : ') !!}                                             
                        {{\Carbon\Carbon::parse($dictation->date)->format('d/m/Y')}}

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('date', 'Sede : ') !!} {{ $dictation->places->name }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('text', 'Ciudad : ') !!} {{ $dictation->places->city->name }}
                    </div>
                </div>
               
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('date', 'Clientes Inscriptos : ') !!} 
                        <h3 class="badge badge-primary">
                            {{$dictation->users->count()}}
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('time', 'Cupos Disponibles : ') !!} {{ $dictation->stock }}

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('time', 'Estado : ') !!} {{ $dictation->status }}

                    </div>
                </div>
                
            </div><hr>

            <h3>Planilla de Asistencia</h3><br>
                
                    <div class="form-group">
                        <table id="table-course" class="table table-responsive-sm">
                            <thead class="thead-dark">
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Vencimiento L.N.C.</th>
                                <th>Estado del Pago</th>
                             
                   
                            </thead>

                            <tbody>
                                @foreach ($pivots as $pivot)
                                    <tr>
                                        <td> {{ $pivot->user->last_name }} , {{ $pivot->user->name }} </td>
                                        <td> {{ $pivot->user->email }} </td>
                                        <td>{{ $pivot->user->phone }}</td>

                                        <td> {{\Carbon\Carbon::parse($pivot->user->expire_license)->format('d/m/Y')}} </td>
                                        <td>
                                            @if ($pivot->status == 'aprobado')
                                                <p class="badge badge-success">Aprobado</p>
                                            @else
                                                <p class="badge badge-danger"><b>Pendiente</b></p>
                                            @endif
                                        </td>
                                      
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
              
            </div>
<br>


            <a href="{{ route('admin.dictations.index') }}" class="btn btn-danger" type="submit">Volver</a>


        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

    </script>

@endsection
