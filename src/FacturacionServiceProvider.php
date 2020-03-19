<?php

namespace Gebrail\Facturacion;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class FacturacionServiceProvider extends ServiceProvider
{
    public function boot()
    {
      //  $this->loadRoutesFrom($this->basePath('/routes/web.php'));

        $this->loadViewsFrom($this->basePath('resources/views'),'facturacion-gebrail');

        $this->publishes([
            $this->basePath('/resources/views/') => resource_path('views/vendor/facturacion')
        ],'facturacion-gebrail-views');

        $this->publishes([
            $this->basePath('config/facturacion-gebrail.php') => base_path('config/facturacion-gebrail.php')
        ], 'facturacion-gebrail-config');

    }

    public function register()
    {
        
        $this->app->bind('facturacion');

        $this->mergeConfigFrom(
            $this->basePath('config/facturacion-gebrail.php'),
            'facturacion-gebrail'
        );
    }


    protected function basePath($path='')
    {
        return __DIR__.'/../'.$path;
    }

}

