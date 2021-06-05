@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Compania:</strong>
                            {{ $proveedore->Nombre_Compania }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto Name:</strong>
                            {{ $proveedore->Contacto_Name }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto Lastname:</strong>
                            {{ $proveedore->Contacto_Lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedore->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $proveedore->Ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $proveedore->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Postal:</strong>
                            {{ $proveedore->Codigo_postal }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $proveedore->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $proveedore->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Metodos De Pagos:</strong>
                            {{ $proveedore->Metodos_de_pagos }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Descuento:</strong>
                            {{ $proveedore->Tipo_descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $proveedore->Notas }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento Disponible:</strong>
                            {{ $proveedore->Descuento_disponible }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $proveedore->Pais }}
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

