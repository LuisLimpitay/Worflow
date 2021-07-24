<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        //
    }

  
    public function boot()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME,'es_ES');
    }
}
