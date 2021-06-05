<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_producto') }}
            {{ Form::text('nombre_producto', $producto->nombre_producto, ['class' => 'form-control' . ($errors->has('nombre_producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_producto') }}
            {{ Form::text('descripcion_producto', $producto->descripcion_producto, ['class' => 'form-control' . ($errors->has('descripcion_producto') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Producto']) }}
            {!! $errors->first('descripcion_producto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_categorias') }}
                <select id="id_categorias" name="id_categorias" class="form-control">    
                <option>------Seleccionar------</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}"  {{$categoria->id==$producto->id_categorias ? 'selected' : ''}}>{{ $categoria->nombre_categoria }}</option>
                @endforeach
            </select>
            {!! $errors->first('id_categorias', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_proveedores') }}
                <select id="id_proveedores" name="id_proveedores" class="form-control">    
                    <option>------Seleccionar------</option>
                    @foreach ($proveedores as $proveedore)
                        <option value="{{ $proveedore->id }}"  {{$proveedore->id==$producto->id_proveedores ? 'selected' : ''}}>{{ $proveedore->Nombre_Compania }}</option>
                    @endforeach
                </select>
            {!! $errors->first('id_proveedores', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_unitario') }}
            {{ Form::text('precio_unitario', $producto->precio_unitario, ['class' => 'form-control' . ($errors->has('precio_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Precio Unitario']) }}
            {!! $errors->first('precio_unitario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calidad_unidad') }}
            {{ Form::text('calidad_unidad', $producto->calidad_unidad, ['class' => 'form-control' . ($errors->has('calidad_unidad') ? ' is-invalid' : ''), 'placeholder' => 'Calidad Unidad']) }}
            {!! $errors->first('calidad_unidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('talla_disponible') }}
            {{ Form::text('talla_disponible', $producto->talla_disponible, ['class' => 'form-control' . ($errors->has('talla_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Talla Disponible']) }}
            {!! $errors->first('talla_disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('colores_disponible') }}
            {{ Form::text('colores_disponible', $producto->colores_disponible, ['class' => 'form-control' . ($errors->has('colores_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Colores Disponible']) }}
            {!! $errors->first('colores_disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tamano') }}
            {{ Form::text('tamano', $producto->tamano, ['class' => 'form-control' . ($errors->has('tamano') ? ' is-invalid' : ''), 'placeholder' => 'Tamano']) }}
            {!! $errors->first('tamano', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $producto->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso_unidad') }}
            {{ Form::text('peso_unidad', $producto->peso_unidad, ['class' => 'form-control' . ($errors->has('peso_unidad') ? ' is-invalid' : ''), 'placeholder' => 'Peso Unidad']) }}
            {!! $errors->first('peso_unidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidad_Stock') }}
            {{ Form::text('unidad_Stock', $producto->unidad_Stock, ['class' => 'form-control' . ($errors->has('unidad_Stock') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Stock']) }}
            {!! $errors->first('unidad_Stock', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidad_orden') }}
            {{ Form::text('unidad_orden', $producto->unidad_orden, ['class' => 'form-control' . ($errors->has('unidad_orden') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Orden']) }}
            {!! $errors->first('unidad_orden', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto_disponible') }}
            {{ Form::text('producto_disponible', $producto->producto_disponible, ['class' => 'form-control' . ($errors->has('producto_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Producto Disponible']) }}
            {!! $errors->first('producto_disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descuento_disponible') }}
            {{ Form::text('descuento_disponible', $producto->descuento_disponible, ['class' => 'form-control' . ($errors->has('descuento_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Descuento Disponible']) }}
            {!! $errors->first('descuento_disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('orden_actual') }}
            {{ Form::text('orden_actual', $producto->orden_actual, ['class' => 'form-control' . ($errors->has('orden_actual') ? ' is-invalid' : ''), 'placeholder' => 'Orden Actual']) }}
            {!! $errors->first('orden_actual', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            <input type="file" name="imagenes" id="imagenes" class="form-control">
            {!! $errors->first('imagenes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
     
        
        <div class="form-group">
            {{ Form::label('clasificacion') }}
            {{ Form::text('clasificacion', $producto->clasificacion, ['class' => 'form-control' . ($errors->has('clasificacion') ? ' is-invalid' : ''), 'placeholder' => 'Clasificacion']) }}
            {!! $errors->first('clasificacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota') }}
            {{ Form::text('nota', $producto->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>