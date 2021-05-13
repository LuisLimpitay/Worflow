<x-app-layout>

    <br>
    <h1 class="container mx-auto text-2xl"> Dejanos tu mensaje NEGRO</h1>

    <div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto  ">

        <div class="grid grid-cols-1 md:col-span-2 lg:col-span-2 bg-yellow-200 ">

            <form action="{{route('contactanos.store')}}" method="POST">

                @csrf

                <label for="">Nombre y Apellido
                    <br>
                    <input type="text" name="name">

                </label>
                @error('name')
                <p><strong>{{$message}}</strong></p>
                @enderror
                <br>

                <label for="">Correo
                    <br>
                    <input type="text" name="correo">
                </label>
                @error('correo')
                <p><strong>{{$message}}</strong></p>
                @enderror
                <br>

                <label for="">Mensaje
                    <br>
                    <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
                </label>
                @error('mensaje')
                <p><strong>{{$message}}</strong></p>
                @enderror
                <br><br>
                <button class="mr-5 bg-gray-200 hover:bg-blue-700 hover:text-white border border-gray-400 text-blue-700 font-bold py-2 px-6 rounded-lg" type="submit">Enviar Mensaje</button>
            </form>

            @if (session('info'))
                <script>
                    alert("{{session('info')}}");
                </script>
            @endif
        </div>

        <div class="grid grid-cols-1 md:col-span-3 lg:col-span-1 px-12 py-12 bg-blue-500">
            <p>MAPA</p>
        </div>

    </div>


    <div class="card grid grid-cols-1 px-3 py-3 gap-4 container mx-auto ">
        <div class="bg-red-500">FOOTER</div>
    </div>

</x-app-layout>
