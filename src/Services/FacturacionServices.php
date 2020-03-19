<?php

namespace Gebrail\Facturacion\Services;

use Gebrail\ConexionApi\Traits\AuthorizesSomeApiRequests;
use Gebrail\ConexionApi\Traits\ConsumesExternalServices;
use Gebrail\ConexionApi\Traits\InteractsWithSomeApiResponses;

class FacturaService
{
    use ConsumesExternalServices, AuthorizesSomeApiRequests, InteractsWithSomeApiResponses;


    protected $baseUri;
    protected $mi_sistema;

    public function __construct()
    {
      $this->baseUri = config('some-api.yebrail.base_uri')."/mysystem/sistema/";
      $this->mi_sistema = config('some-api.yebrail.mi_sistema')."";
      }


      public  function getMisistema()
      {
          return $this->makeRequest('GET', "{$this->mi_sistema}");
      }

      public function getFacturas()
      {
      return $this->makeRequest('GET', "facturas/{$this->mi_sistema}");
      }



    
}