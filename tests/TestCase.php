<?php


namespace Gebrail\Facturacion\Tests;

use Gebrail\Facturacion\Facades\Facturacion;
use Gebrail\Facturacion\FacturacionServiceProvider;
use Gebrail\Facturacion\RouteServiceProvider;

class  TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FacturacionServiceProvider::class,
            RouteServiceProvider::class
        ];
    }


    protected function getPackageAliases($app)
    {
        return [
            'Facturacion' => Facturacion::class,
        ];
    }


}