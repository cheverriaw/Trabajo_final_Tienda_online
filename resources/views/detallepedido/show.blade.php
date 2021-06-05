@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detallepedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detallepedidos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Productos:</strong>
                            {{ $detallepedido->id_productos }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ordenes:</strong>
                            {{ $detallepedido->id_ordenes }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Orden:</strong>
                            {{ $detallepedido->Numero_orden }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $detallepedido->Precio }}
                        </div>
                        <div class="form-group">
                            <strong>Calidad:</strong>
                            {{ $detallepedido->Calidad }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $detallepedido->Descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $detallepedido->Total }}
                        </div>
                        <div class="form-group">
                            <strong>Tamano:</strong>
                            {{ $detallepedido->Tamano }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $detallepedido->Color }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Envio:</strong>
                            {{ $detallepedido->Fecha_envio }}
                        </div>
                        <div class="form-group">
                            <strong>Order Detalle Id:</strong>
                            {{ $detallepedido->Order_Detalle_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Pago:</strong>
                            {{ $detallepedido->Fecha_de_pago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

