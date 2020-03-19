<?php


namespace Gebrail\Facturacion;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;


class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Gebrail\Facturacion\Http\Controllers';

    public  function map()
    {

        Route::namespace($this->namespace)->group(__DIR__.'/../routes/web.php');

    }


}