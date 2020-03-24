<?php


namespace Gebrail\Facturacion\Repositories;
use Carbon\Carbon;
use DataTables;
use Gebrail\Facturacion\Services\FacturaService;
use Illuminate\Support\Collection;

class FacturasRepositorie
{

    public function __construct(FacturaService $facturaService)
    {
        $this->facturaService = $facturaService;
    }


    public function ListarFacturas()
    {
       $facturas = $this->facturaService->getFacturas();


        return Datatables::collection($facturas)->editColumn('situacion', function($facturas)
        {
            return $this->tipoSituacion($facturas->situacion, Carbon::parse($facturas->fechaCreacion));

        })->addColumn('opciones', function($facturas)
        {
            return $this->opciones($facturas->situacion, $facturas->factura,Carbon::parse($facturas->fechaCreacion));

        })->addColumn('formaFacturado', function($facturas)
        {
            return $this->tipoFacturacion($facturas->facturacion);

        })->editColumn('factura', function($facturas)
        {
            return '<p class="font-weight-bold text-truncate" data-toggle="tooltip" title="'.$facturas->factura.'">'. $facturas->factura .'</p>';

        })->editColumn('total', function($facturas)
        {
            return '<small class="badge badge-secondary">$' . number_format($facturas->total,0). '</small>';

        })->rawColumns(['situacion','opciones','factura','formaFacturado','total'])->toJson();

    }

    public function ObtenerSistema()
    {
        return $this->facturaService->getMisistema();
    }

    public  function  tipoSituacion($situacion, $fecha)
    {
        switch ($situacion)
        {
            case 'pagado' :

                return '<small class="badge badge-success">' . $situacion . '</small>';

                break;
            case 'no pagado':

                $fechax = $fecha->addDays(8);

                if(Carbon::now()>$fechax)
                {
                    return '<small class="badge badge-danger">' . $situacion . '</small>';
                }
                else
                {
                    return '<small class="badge badge-info" data-toggle="tooltip" title="Pagar antes del '.$fecha->isoFormat('DD MMMM').'">En Proceso</small>';
                }

                break;
            case 'cancelado':

                return '<small class="badge badge-warning">' . $situacion . '</small>';

                break;
        }
    }

    public  function opciones($situacion,$factura,$fecha)
    {
        switch ($situacion)
        {
            case 'pagado' :
                return '
                    <a href='.route('admin.mi.factura', $factura).'
                        class="btn btn-sm btn-secondary">
                         Ver Recibo
                    </a>
                    ';

                break;
            case 'no pagado':

                $fechax = $fecha->addDays(8);

                if(Carbon::now()>$fechax)
                {
                    return '
                    <a href='.route('admin.mi.factura', $factura).'
                        class="btn btn-sm btn-secondary">
                        <i class="bi bi-card-text"></i> Detallar Factura
                    </a> 
                    ';
                }
                else
                {
                    return '
                    <a href='.route('admin.mi.factura', $factura).'
                        class="btn btn-sm btn-primary">
                        <i class="bi bi-card-text"></i> Ver Factura
                    </a> 
                    ';
                }

                break;
            case 'cancelado':
                return '
                    <a href='.route('admin.mi.factura', $factura).'
                        class="btn btn-sm btn-light">
                        <i class="bi bi-card-text"></i> Detallar Factura
                    </a>
                    ';

                break;
        }
    }


    public function tipoFacturacion($facturacion)
    {
        switch ($facturacion)
        {
            case 'factura_general':
                return  '<p class="text-capitalize" data-toggle="tooltip" title="Servicio del Sistema Información por periodo del consumo, Compra de algun servicio Digital ó Compra de algun producto fisico" >General</p>';
                break;
            case 'factura_sistema' :
                return  '<p class="text-capitalize" data-toggle="tooltip" title="Servicio del Sistema Información por periodo del consumo" >Suscripción del Sistema </p>';
                break;
            case 'factura_servicios' :
                return  '<p class="text-capitalize" data-toggle="tooltip" title="Compra de algun servicio digital ejemplo: [Marketing Digital, Seo, Social Media] ">Servicios Digitales</p>';
                break;
            case 'factura_venta_servicios' :
                return  '<p class="text-capitalize" data-toggle="tooltip" title="Compra de servicio digital y un producto o varios ejemplo: [Marketing Digital, Seo, Social Media] + [Discos duros, Camaras ...] ">Servicios Digitales y Productos Adquiridos</p>';
                break;
            case 'factura_venta_productos' :
                return  '<p class="text-capitalize" data-toggle="tooltip" title="Compra de uno o varios productos [Discos duros, camaras de seguridad, licencias de office]">Productos Adquiridos "Beta"</p>';
                break;
            case 'otra' :
                return  '<p class="text-capitalize" data-toggle="tooltip" title="En beta" >Otra "Beta"</p>';
                break;
        }
    }


}