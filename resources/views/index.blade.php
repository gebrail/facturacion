@extends('facturacion-gebrail::layout')


@section('content')

    <h1>{{$sistema->empresa}}</h1>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">sistema</th>
            <th scope="col">Fecha Generada</th>
            <th scope="col">Estado</th>
            <th scope="col">Total</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($facturas as $factura)
        <tr>
            <th scope="row">{{$factura->sistema}}</th>
            <td>{{\Carbon\Carbon::parse($factura->fechaCreacion)->format('d/m/Y') }}</td>
            <td>{{$factura->situacion}}</td>
            <td>{{$factura->total}}</td>
            <td><button class="btn btn-primary">Ver Factura</button></td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection