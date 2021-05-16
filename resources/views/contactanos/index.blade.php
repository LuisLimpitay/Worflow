<x-app-layout>

    <br>

    <div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto  ">

        <div class="grid grid-cols-1 md:col-span-2 lg:col-span-2 bg-yellow-200 ">

            <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
                <div class="container mx-auto">
                    <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                        <div class="text-center">
                            <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Contactanos</h1>
                            <p class="text-gray-400 dark:text-gray-400">Rellene el siguiente formulario para enviarnos un mensaje.</p>
                        </div>
                        
                        <div class="m-7">

                            <form action="{{route('contactanos.store')}}" method="POST">

                                @csrf

                                <div class="mb-6">
                                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Apellido y Nombre</label>
                                    <input type="text" name="name" id="name" placeholder="Cruz Jacinto" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                                    
                                </div>

                                <div class="mb-6">
                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
                                    <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                                    
                                </div>
                                
                                <div class="mb-6">
                                    <label for="mensaje" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Tu mensaje</label>

                                    <textarea rows="3" name="mensaje" id="mensaje" placeholder="Tu mensaje" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required></textarea>
                                    
                                </div>

                                <div class="mb-6">
                                    <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Enviar Mensaje</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                    


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
