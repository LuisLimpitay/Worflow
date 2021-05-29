<x-app-layout>

    <section>
        <div class="bg-gray-100 py-20">
            <div class="container mx-auto flex flex-col md:flex-row">
                <div class="flex flex-col w-full lg:w-1/3 p-8">
                    <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Déjenos tu consulta!</p>
                    <p class="text-sm md:text-base leading-snug text-black text-opacity-100">
                        Por favor proporcionenos su valiosa opinion o consultas, nos contactaremos a la
                        brevedad.
                    </p>
                </div>

                <div class="flex flex-col w-full lg:w-2/3 justify-center">
                    <div class="container w-full px-2">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-6/12 px-2">
                                <div
                                    class="flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                                    <div class="flex-auto p-5 lg:p-10">
                                        <h4 class="text-2xl mb-4 text-black font-semibold">Formulario de Contacto</h4>

                                        @if ($errors->any())

                                            @foreach ($errors->all() as $error)
                                                <p class=" text-red-500">* {{ $error, '<br>' }}</p>
                                            @endforeach

                                        @endif
                                        <form action="{{ route('contactanos.store') }}" method="POST">

                                            @csrf

                                            <div class="mb-6">
                                                <label for="name"
                                                    class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Apellido
                                                    y Nombre
                                                </label>
                                                <input type="text" name="name" id="name" placeholder="Cruz Jacinto"
                                                    value="{{ old('name') }}"
                                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />

                                            </div>

                                            <div class="mb-6">
                                                <label for="email"
                                                    class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
                                                <input type="text" name="email" id="email" value="{{ old('email') }}"
                                                    placeholder="algo@gmail.com"
                                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />

                                            </div>

                                            <div class="mb-6">
                                                <label for="mensaje"
                                                    class="block mb-2 text-sm text-gray-600 dark:text-gray-400">
                                                    Mensaje</label>

                                                <textarea rows="3" name="mensaje" id="mensaje"
                                                    placeholder="Escribe aqui tu mensaje" value="{{ old('name') }}"
                                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"></textarea>

                                            </div>

                                            <div class="mb-6">
                                                <button type="submit"
                                                    class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Enviar
                                                    Mensaje</button>
                                            </div>

                                        </form>

                                        @if (session('info'))
                                            <script>
                                                alert("{{ session('info') }}");

                                            </script>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        const form = document.getElementById('form');
        const result = document.getElementById('result');

        form.addEventListener('submit', function(e) {
            const formData = new FormData(form);
            e.preventDefault();
            var object = {};
            formData.forEach((value, key) => {
                object[key] = value
            });
            var json = JSON.stringify(object);
            result.innerHTML = "Please wait..."

            fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: json
                })
                .then(async (response) => {
                    let json = await response.json();
                    if (response.status == 200) {
                        result.innerHTML = json.message;
                        result.classList.remove('text-gray-500');
                        result.classList.add('text-green-500');
                    } else {
                        console.log(response);
                        result.innerHTML = json.message;
                        result.classList.remove('text-gray-500');
                        result.classList.add('text-red-500');
                    }
                })
                .catch(error => {
                    console.log(error);
                    result.innerHTML = "Something went wrong!";
                })
                .then(function() {
                    form.reset();
                    setTimeout(() => {
                        result.style.display = "none";
                    }, 5000);
                });
        })

    </script>

</x-app-layout>
