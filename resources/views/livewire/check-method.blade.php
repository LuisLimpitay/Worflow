<div>

    <form action="">

        <input type="checkbox" name="payment_method" wire:model="tarjeta">
        <label for="tarjeta">Tarjeta</label><br>

        <input type="checkbox" name="payment_method" wire:model="transferencia" value="transferencia">
        <label for="transferencia">Transferencia</label><br>

        <input type="checkbox" name="payment_method" wire:model="efectivo" value="efectivo">
        <label for="efectivo">Efectivo</label><br>

    </form>

{{--     ACA HACE LA MAGIA DE ACUERDO A LO QUE SELECCIONE--}}    
    <div>

        @if ($tarjeta)
            
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        
                        <div class="flex flex-col">
                            <label class="leading-loose">Numero de la Tarjeta</label>
                            <input type="text"
                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                placeholder="XXXX XXXX XXXX XXXX">
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Venciminento</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="text"
                                        class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="mm/YY">
                                    <div class="absolute left-3 top-2">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Codigo de Seguridad</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <input type="text"
                                        class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="XXX">
                                    <div class="absolute left-3 top-2">
                                        
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="pt-4 flex items-center space-x-4">
                        <button
                            class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg> Cancelar
                        </button>
                        <button
                            class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                            Continuar
                        </button>
                    </div>
                </div>
              
    

                @elseif ($transferencia)
                    
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                
                                <div class="flex flex-col">
                                    <label class="leading-loose">CBU</label>
                                    <input type="text" readonly
                                        class="px-4 py-2 border focus:ring-gray-500  focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="12345678912354">
                                </div>

                                <div class="flex flex-col">
                                    <label class="leading-loose">Alias</label>
                                    <input type="text" readonly
                                        class="px-4 py-2 border focus:ring-gray-500  focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="perro.gato.cabra">
                                </div>
                                
                                
                                
                            </div>
                            <div class="pt-4 flex items-center space-x-4">
                                <button
                                    class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg> Cancelar
                                </button>
                                <button
                                    class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                                    Continuar
                                </button>
                            </div>
                        </div>
                    
                    
                    
                    @elseif ($efectivo)
                        
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <h3>Explicativo</h3>
                                    <div class="flex flex-col">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque enim cum sed corporis, dolore modi dolor labore, distinctio amet possimus placeat commodi cumque alias odio tempora ipsum repellendus earum deserunt.</p>
                                    </div>            
                                    
                                </div>
                                <div class="pt-4 flex items-center space-x-4">
                                    <button
                                        class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg> Cancelar
                                    </button>
                                    <button
                                        class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                                        Continuar
                                    </button>
                                </div>
                            </div>
                        
                    
        @endif

    </div>

</div>
