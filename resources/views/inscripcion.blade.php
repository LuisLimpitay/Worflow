<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <title>Comprobante</title>
</head>

<body>

    <div class="card text-black bg-gray mb-3" style="max-width: 35rem;">
        <div class="card-header">
            <div class="card-body">
                <h4 class="card-title" align="center">Comprobante de Inscripcion - Workflow</h4>
                <hr>

                @foreach ($detalles as $pivot)

                    <p class="card-text" align="center"><b>Curso : </b>{{ $pivot->dictation->courses->name }}</p>
                    <p class="card-text" align="center"><b>Cliente : </b>{{ $pivot->user->last_name }}, {{ $pivot->user->name }}
                    </p>

                    <p align="center"><b>Fecha : </b>{{ \Carbon\Carbon::parse($pivot->dictation->date)->format('d/m/Y') }} <b>Hora :
                        </b>{{ $pivot->dictation->time }}</p>

                    <p align="center"><b>Lugar : </b>{{ $pivot->dictation->places->name }}</p>
                    <p align="center"><b>Direccion : </b>{{ $pivot->dictation->places->address_street }}
                        {{ $pivot->dictation->places->address_number }}</p>
                    <p align="center"><b>Ciudad : </b>{{ $pivot->dictation->places->city->name }}</p>
                    <p align="center"><b>Cupos : </b>{{ $pivot->quantity }}</p>
                    <hr>
                    <div class="card">
                        <p align="center"><i>El dia del curso debera asisistir con la Licencia Nacional de Conducir Vigente. Caso
                                contrario no podra rendir la parte practica</i> </p>
                    </div>
            </div>
        </div>
    </div>

    @endforeach


    {{-- <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div> --}}
</body>

</html>
