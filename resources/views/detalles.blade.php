@extends('layouts.app');


@section('contenido')
    
<p>Welcome to this beautiful admin panel.</p>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Show Producto</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    
                    <div class="form-group">
                        <strong>Nombre Producto:</strong>
                        {{ $producto->nombre_producto }}
                    </div>
                    <div class="form-group">
                        <strong>Descripcion Producto:</strong>
                        {{ $producto->descripcion_producto }}
                    </div>
                    <div class="form-group">
                        <strong>Id Categorias:</strong>
                        {{ $producto->id_categorias }}
                    </div>
                    <div class="form-group">
                        <strong>Id Proveedores:</strong>
                        {{ $producto->id_proveedores }}
                    </div>
                    <div class="form-group">
                        <strong>Precio Unitario:</strong>
                        {{ $producto->precio_unitario }}
                    </div>
                    <div class="form-group">
                        <strong>Calidad Unidad:</strong>
                        {{ $producto->calidad_unidad }}
                    </div>
                    <div class="form-group">
                        <strong>Talla Disponible:</strong>
                        {{ $producto->talla_disponible }}
                    </div>
                    <div class="form-group">
                        <strong>Colores Disponible:</strong>
                        {{ $producto->colores_disponible }}
                    </div>
                    <div class="form-group">
                        <strong>Tamano:</strong>
                        {{ $producto->tamano }}
                    </div>
                    <div class="form-group">
                        <strong>Color:</strong>
                        {{ $producto->color }}
                    </div>
                    <div class="form-group">
                        <strong>Peso Unidad:</strong>
                        {{ $producto->peso_unidad }}
                    </div>
                    <div class="form-group">
                        <strong>Unidad Stock:</strong>
                        {{ $producto->unidad_Stock }}
                    </div>
                    <div class="form-group">
                        <strong>Unidad Orden:</strong>
                        {{ $producto->unidad_orden }}
                    </div>
                    <div class="form-group">
                        <strong>Producto Disponible:</strong>
                        {{ $producto->producto_disponible }}
                    </div>
                    <div class="form-group">
                        <strong>Descuento Disponible:</strong>
                        {{ $producto->descuento_disponible }}
                    </div>
                    <div class="form-group">
                        <strong>Orden Actual:</strong>
                        {{ $producto->orden_actual }}
                    </div>
                    <div class="form-group">
                        <strong>Imagenes:</strong>
                        <img src="{{ asset($producto->imagenes) }}" alt="{{ $producto->nombre_producto }}" class="img-fluid" width="90px">
                                        
                    </div>
                    <div class="form-group">
                        <strong>Clasificacion:</strong>
                        {{ $producto->clasificacion }}
                    </div>
                    <div class="form-group">
                        <strong>Nota:</strong>
                        {{ $producto->nota }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

