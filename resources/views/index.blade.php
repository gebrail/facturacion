@extends('facturacion-gebrail::layout')

@section('nombre-tabla')facturas-gebrail-table @stop

@section('ruta-tabla'){{route('admin.mis.facturas.listar')}}@stop

@section('datostabla')
    {data:'factura'},
    {data:'formaFacturado'},
    {data:'total'},
    {data:'situacion'},
    {data:'opciones'},
@stop


@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{$sistema->empresa}}
            <small>Facturas</small>
        </h1>
    </div>

    <table class="table table-dark text-center" id="facturas-gebrail-table" width="100%" cellspacing="0">
        <thead class="text-center">
            <tr>
                <th>Ref. Factura</th>
                <th>Facturación</th>
                <th>Valor a Pagar</th>
                <th>Estado</th>
                <th>Opción</th>
            </tr>
        </thead>
        <tfoot class="text-center">
            <tr>
                <th>Ref. Factura</th>
                <th>Facturación</th>
                <th>Valor a Pagar</th>
                <th>Estado</th>
                <th>Opción</th>
            </tr>
        </tfoot>
        <tbody>
        </tbody>
    </table>




@endsection

@push('styles')
    <link rel="stylesheet" href="http://peluqueria.test/design/vendor/datatables/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
    <script src="http://peluqueria.test/design/vendor/datatables/jquery.dataTables.min.js"></script>

    <script src="http://peluqueria.test/design/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    @include('facturacion-gebrail::tabla')
@endpush
