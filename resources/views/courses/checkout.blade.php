<x-app-layout>
    <br>
    <div class="container mx-auto justify-items-center grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">
    
      
          <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-green-300 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-4">
            <div class="flex flex-col justify-center">
                      <p class="text-gray-900 dark:text-gray-300 font-semibold">Paso 1: </p>
    
              <p class="text-black dark:text-gray-100 text-justify font-semibold">Completado</p>
            </div>
        </div>
          <!-- END SMALL CARD ROUNDED -->
      
          <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-green-300 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-4">
                <div class="flex flex-col justify-center">
                  <p class="text-gray-900 dark:text-gray-300 font-semibold">Paso 2</p>
                  <p class="text-black dark:text-gray-100 text-justify font-semibold">Método de Pago </p>
                </div>
              </div>
                  <!-- END SMALL CARD ROUNDED -->
            <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-red-800 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-2">
                <div class="flex flex-col justify-center">
                  <p class="text-gray-400 dark:text-gray-300 font-semibold">Paso 3</p>
                  <p class="text-gray-400 dark:text-gray-100 text-justify font-semibold">Confirmar Pago</p>
                </div>
              </div>
          <!-- END SMALL CARD ROUNDED --->
          
    </div>

{{--GRID 1 ******** SI NO ESTA REGISTRADO *********************************************************--}}
{{--GRID 1 ******** SI NO ESTA REGISTRADO *********************************************************--}}

<div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto  ">

    @if(!Auth::check())
            <div class="grid grid-cols-1 md:col-span-2 lg:col-span-2 px-8 py-6">

                <div class="container mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2"><br>

{{--                     FORMULARIO DE REGISTRO  --}}                    
                    <h1 class="bg-red-300 text-2xl font-bold">Formulario de Registro</h1><br>
                    <x-guest-layout>
                        <x-jet-authentication-card>
                            <x-slot name="logo">
                                <x-jet-authentication-card-logo />
                            </x-slot>

                            <x-jet-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('register') }}">

                            @csrf

                            <!-- component -->

                                <div class="">
                                    <br>
                                    <hr>
                                    <br>
                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <x-jet-label for="name" value="{{ __('Nombre') }}" />
                                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <x-jet-label for="last_name" value="{{ __('Apellido') }}" />
                                            <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
                                        </div>
                                    </div>

                                    <div class="-mx-3 md:flex mb-6">

                                        <div class="md:w-full px-3 mb-6 md:mb-0">
                                            <x-jet-label for="number_license" value="{{ __('Numero de Licencia de Conducir') }}" />
                                            <x-jet-input id="number_license" class="block mt-1 w-full" placeholder="Ej: 33111222" pattern="[0-9]{8}"  type="tel" name="number_license  " :value="old('number_license')" required />
                                            <small>El formato debe ser de 8 digitos.</small><br><br>
                                        </div>
                                        <div class="md:w-full px-3 mb-6 md:mb-0">
                                            <x-jet-label for="expire_license" value="{{ __('Venciminento Licencia Nacional de Conducir') }}" />
                                            <x-jet-input id="expire_license" class="block mt-1 w-full" min="2021-05-11" type="date" name="expire_license" :value="old('expire_license')" required />
                                        </div>
                                        
                                    </div>

                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                            <x-jet-label for="email" value="{{ __('Email') }}" />
                                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                        </div>
                                        <div class="md:w-1/2 px-3">
                                            <x-jet-label for="password" value="{{ __('Password') }}" />
                                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                        </div>
                                    </div>

                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="md:w-full px-3 mb-6 md:mb-0">
                                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>

                                    </div>
                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-jet-label for="terms">
                                                <div class="flex items-center">
                                                    <x-jet-checkbox name="terms" id="terms"/>

                                                    <div class="ml-2">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-jet-label>
                                        </div>
                                    @endif

                                    <div class="flex items-center justify-end mt-4">

                                        <x-jet-button class="ml-4">
                                            {{ __('ENVIAR') }}
                                        </x-jet-button>
                                    </div>



                                </div>

                            </form>


                        </x-jet-authentication-card>

                    </x-guest-layout>


                </div>

            </div>

{{--FIN GRID 1 *****************************************************************--}}
{{--FIN GRID 1 *****************************************************************--}}

{{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
{{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}


        {{--GRID 2 *****************************************************************--}}
                {{--GRID 2 *****************************************************************--}}

            <div class="grid grid-cols-1 md:col-span-3 lg:col-span-1 px-8 py-6">

                <div class="container mx-auto"><br>

                    <div class="bg-white shadow-md rounded px-4 pt-6 pb-8 mb-4 flex flex-col my-2">

                        <h1 class="bg-red-300 text-2xl font-bold">Resumen de tu Inscrdipción SL</h1>

                        <p class="px-4 py-2 text-lg"><strong>Curso: </strong> {{$dictation->courses->name}}</p>
                        <p class="px-4 py-2"><strong>Fecha: </strong> {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y')}}</p>
                        <p class="px-4 py-2"><strong>Hora: </strong>{{$dictation->time}}</p>
                        <p class="px-4 py-2"><strong>Direccion: </strong>{{$dictation->places->address_street}} {{$dictation->places->address_number}}</p>

                        <p class="px-4 py-2"><strong>Ciudad: </strong>{{$dictation->places->city}}</p>

                        <p class="px-4 py-2"><strong>Duracion: </strong>{{$dictation->duration}} hs</p>

                        <p class="px-4 py-2"><strong>Instructor: </strong>{{$dictation->courses->teachers->name}}</p>
                        <p class="px-4 py-2 text-lg font-bold"><strong>A Pagar : </strong> ARS $ {{$dictation->courses->price}},00</p><br>


                    </div>

                </div>
                @elseif(Auth::check())

                   

                        <div class="container mx-auto items-center"><br>

                            <div class="bg-white shadow-md rounded px-4 pt-6 pb-8 mb-4 flex flex-col my-2">
                                <form>
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for="male">Efectivo</label><br>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female">Transferencia Bancaria</label><br>
                                    <input type="radio" id="other" name="gender" value="other">
                                    <label for="other">Tarjeta de Debito</label>
                                </form><br>
                                
                                <h1 class="bg-red-300 text-2xl font-bold">Resumen de tu Inscripción L</h1>

                                <p class="px-4 py-2 text-lg"><strong>Curso: </strong> {{$dictation->courses->name}}</p>
                                <p class="px-4 py-2"><strong>Fecha: </strong> {{ \Carbon\Carbon::parse($dictation->date)->format('d/m/Y')}}</p>
                                <p class="px-4 py-2"><strong>Hora: </strong>{{$dictation->time}}</p>
                                <p class="px-4 py-2"><strong>Direccion: </strong>{{$dictation->places->address_street}} numero {{$dictation->places->address_number}}</p>

                                <p class="px-4 py-2"><strong>Ciudad: </strong>{{$dictation->places->city}}</p>

                                <p class="px-4 py-2"><strong>Duracion: </strong>{{$dictation->duration}} hs</p>

                                <p class="px-4 py-2"><strong>Instructor: </strong>{{$dictation->courses->teachers->name}}</p>
                                <p class="px-4 py-2 text-lg font-bold"><strong>A Pagar : </strong> ARS $ {{$dictation->courses->price}}</p><br>

                                {{-- Boton de Inscripcion --}}
                                <div class="flex justify-center">
                                    <a href="{{ route('courses.payment', $dictation) }}"
                                       class="inline-block text-xl px-6 py-3 bg-yellow-500 text-white rounded-full ">
                                        PAGAR
                                    </a><br>
                                </div>

                            </div>

                        </div>
                        @endif
                        


                
            </div>

{{-- ******************************* FIN GRID 2 ************************************************************ --}}
{{-- ******************************* FIN GRID 2 ************************************************************ --}}


{{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
{{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}

</div>

</x-app-layout>
