<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Planilla</title>
</head>
<body>
    <h3 align="center">Planilla de Asistencia Workflow</h3><hr>
    <p><b>Fecha : </b> {{ \Carbon\Carbon::parse($dictation->date)->format('d M Y') }} </p>
    <p><b>Ciudad : </b>{{$dictation->places->city->name}}</p>
    <p><b>Asistentes : </b>{{$dictation->users->count()}}</p>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Venc L.N.C.</th>
            <th scope="col">Estado del pago</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($pivots as $pivot)
            <tr>
                <td> {{ $pivot->user->last_name }} , {{ $pivot->user->name }} </td>

                <td>{{ $pivot->user->phone }}</td>

                <td> {{ \Carbon\Carbon::parse($pivot->user->expire_license)->format('d/m/Y') }} </td>
                <td>
                    @if ($pivot->status == 'aprobado')
                        <p class="badge badge-success">Aprobado</p>
                    @else
                        <p class="badge badge-danger"><b>Pendiente</b></p>
                    @endif
                </td>

            </tr>
        @endforeach          
        </tbody><hr>
      </table>

      <b></b><hr><br><br>
      <footer>
          <p align="right"><b>Instructor : </b>{{$dictation->courses->teachers->last_name}}, {{$dictation->courses->teachers->name}}</p>
      </footer>
</body>
</html>