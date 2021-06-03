<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>PDF</title>
</head>

<body>


    <div class="card" style="width: 48rem;">
        <div class="card-body">
            @foreach ($users->dictations as $dictation)
                <p class="text-2xl"><b>Curso de
                    {{ $dictation->courses->name }}</b> 
                </p>

                <p class="mt-2 text-xl text-xl text-gray-500"><b>Cliente : </b>{{ $users->last_name }},
                    {{ $users->name }} </p>
                <p class="mt-2 text-xl text-gray-500"><b>Fecha :
                    </b>{{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y') }} <b>Hora</b>
                    {{ $dictation->time }}a.m </p>

                <p class="mt-2 text-xl text-gray-500"><b>Lugar : </b>{{ $dictation->places->name }} </p>
                <p class="mt-2 text-xl text-gray-500"><b>Direccion :
                    </b>{{ $dictation->places->address_street }}
                    {{ $dictation->places->address_number }} </p>
                <p class="mt-2 text-xl text-gray-500"><b>Ciudad: </b>{{ $dictation->places->city }} </p>
                <p class="mt-2 text-xl text-gray-500"><b>Cupos: </b>{{ $dictation->pivot->quantity }} Lugar </p>
                <p class="mt-2 text-gray-900"><i>- Recuerde asistir con su Licencia Nacional de Conducir</i>
                </p>

        </div>
    </div>
    @endforeach
</body>

</html>
