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
                            <span class="card-title">Show Ordene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $ordene->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Orden:</strong>
                            {{ $ordene->Numero_Orden }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pagos:</strong>
                            {{ $ordene->id_pagos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Envio:</strong>
                            {{ $ordene->Fecha_de_envio }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Transacción:</strong>
                            {{ $ordene->Estado_transacción }}
                        </div>
                        <div class="form-group">
                            <strong>Pagado:</strong>
                            {{ $ordene->Pagado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Pago:</strong>
                            {{ $ordene->Fecha_de_pago }}
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
