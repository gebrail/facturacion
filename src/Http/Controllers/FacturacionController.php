<?php

namespace Gebrail\Facturacion\Http\Controllers;

use Gebrail\Facturacion\Facades\Facturacion;
use Gebrail\Facturacion\Services\FacturaService;

class FacturacionController 
{
    protected  $facturaService;

    public function __construct(FacturaService $facturaService)
    {
        $this->facturaService = $facturaService;
    }


    public function index()
    {
        $sistema =  $this->facturaService->getMisistema();

        $facturas = $this->facturaService->getFacturas();


        return view('facturacion-gebrail::index',compact(['facturas','sistema']));
    }

}