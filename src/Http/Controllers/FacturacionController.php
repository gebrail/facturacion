<?php

namespace Gebrail\Facturacion\Http\Controllers;

use Gebrail\Facturacion\Repositories\FacturasRepositorie;

class FacturacionController 
{
    protected  $facturas_repositorie;

    public function __construct(FacturasRepositorie $facturas_repositorie)
    {
        $this->facturas_repositorie=$facturas_repositorie;
    }

    public function listar()
    {
        return $this->facturas_repositorie->ListarFacturas();
    }

    public function index()
    {
        $sistema = $this->facturas_repositorie->ObtenerSistema();

        return view('facturacion-gebrail::index',compact(['sistema']));
    }

    public function show($id)
    {
        dd($id);
    }

}