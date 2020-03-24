<?php

Route::group([
    'prefix' => config('facturacion-gebrail.prefijo'),
    'middleware'=>config('facturacion-gebrail.proteccion')],
    function() {

        Route::get(config('facturacion-gebrail.route'), 'FacturacionController@index')->name('admin.mis.facturas');

        Route::get(config('facturacion-gebrail.route') . "/{factura}", 'FacturacionController@show')->name('admin.mi.factura');

        Route::get(config('facturacion-gebrail.route') . "/listar/facturas", 'FacturacionController@listar')->name('admin.mis.facturas.listar');

    });

