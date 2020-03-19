<?php


namespace Gebrail\Facturacion\Tests\Feature;


use Gebrail\Facturacion\Tests\TestCase;

class RutasVistas extends TestCase
{

    /** @test */
    public function esto_retorna_un_mensaje()
    {
       // $this->withoutExceptionHandling();
        $this->get('hola-ruta')->assertSee("oki doki");
    }

    /** @test */
    public function esto_retorna_un_mensaje_desde_una_vista()
    {
        $this->withoutExceptionHandling();
        $this->get('hola-ruta')->assertViewIs('facturacion-gebrail::index');
    }


}