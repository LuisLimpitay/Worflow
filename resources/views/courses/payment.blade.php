<x-app-layout>


    {{--  PASOS PARA LA INSCRIPCION --}}
    
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
                  <p class="text-black dark:text-gray-100 text-justify font-semibold">completado </p>
                </div>
              </div>
                  <!-- END SMALL CARD ROUNDED -->
            <!-- SMALL CARD ROUNDED -->
            <div class="bg-gray-100 border-green-300 dark:bg-gray-800 | p-4 border-solid rounded-3xl border-4">
                <div class="flex flex-col justify-center">
                  <p class="text-gray-900 dark:text-gray-300 font-semibold">Paso 3</p>
                  <p class="text-black dark:text-gray-100 text-justify font-semibold">Confirmar Pago</p>
                </div>
              </div>
          <!-- END SMALL CARD ROUNDED --->
          
    </div>
      
    {{-- FIN PASOS PARA LA INSCRIPCION --}}
    
    
    {{-- ************************************************************************************************************* --}}
    {{-- ************************************************************************************************************* --}}
    
    
        <div class="grid grid-cols-1 md:col-span-2 lg:grid-cols-3 px-3 py-3 pt-3 gap-4 container mx-auto  ">
    
            {{--GRID 1 *****************************************************************--}}
            <div class="grid grid-cols-1 md:col-span-2 lg:col-span-2 px-8 py-6">
    
                <div class="container mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2"><br>
    
                    <h1 class="bg-red-300 text-2xl font-bold">Proceso ded Pago</h1><br>
                    
                    {{-- ---------------------***********************************************-------------------------------------------------------------------
                        ACA IRIA EL FORMULARIO DE CHECK BOX DE FORMA DE PAGO--}}
                        
                            <div class="form-group row">
                              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                              </div>
                            </div>
                        </form>
                    {{-- --------------------**********************************************---------------------------------------------------------------------
                        ACA IRIA EL FORMULARIO DE CHECK BOX DE FORMA DE PAGO--}}
    
                </div>
    
            </div>
    
                <div class="grid grid-cols-1 md:col-span-3 lg:col-span-1 px-8 py-6">
    
                    <div class="grid grid-cols-1 md:col-span-3 lg:col-span-1 px-8 py-6">
    
                        <div class="container mx-auto"><br>
            
                            <div class="bg-white shadow-md rounded px-4 pt-6 pb-8 mb-4 flex flex-col my-2">
            
                                <h1 class="bg-red-300 text-2xl font-bold">Resumen</h1>
            
                                <p class="px-4 py-2 text-lg"><strong>Nombre del Curso: </strong> {{$dictation->courses->name}}</p>
                                <p class="px-4 py-2"><strong>Fecha: </strong> {{$dictation->date}}</p>
                                <p class="px-4 py-2"><strong>Hora: </strong>{{$dictation->time}}</p>
                                <p class="px-4 py-2"><strong>Direccion: </strong>{{$dictation->places->direction}}</p>
            
                                <p class="px-4 py-2"><strong>Ciudad: </strong>{{$dictation->places->city}}</p>
            
                                <p class="px-4 py-2"><strong>Duracion: </strong>{{$dictation->duration}} hs</p>
            
                                <p class="px-4 py-2"><strong>Instructor: </strong>{{$dictation->courses->teachers->name}} </p>
                                <p class="px-4 py-2 text-lg font-bold"><strong>Monto a Pagar : </strong> ARS $ {{$dictation->courses->price}},00</p><br>
            
                                
            
                        </div>
            
                        
                    </div>
            
            {{--FIN GRID 1 *****************************************************************--}}
    
    
            {{--GRID 2 *****************************************************************--}}
           
            
            
    
            
            
            {{--FIN GRID 2 ************************************************************ --}}
    
        </div>
    
    
    
    
    </x-app-layout>
    