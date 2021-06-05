<div class="box box-info padding-1">
    <div class="box-body">
       
        <div class="form-group">
            {{ Form::label('id_productos') }}
                <select id="id_productos" name="id_productos" class="form-control">    
                    <option>------Seleccionar------</option>
                    @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}"  {{$producto->id==$detallepedido->id_productos ? 'selected' : ''}}>{{ $producto->nombre_producto }}</option>
                    @endforeach
                </select>
            {!! $errors->first('id_productos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_ordenes') }}
                <select id="id_ordenes" name="id_ordenes" class="form-control">    
                    <option>------Seleccionar------</option>
                    @foreach ($ordenes as $ordene)
                        <option value="{{ $ordene->id }}"  {{$ordene->id==$detallepedido->id_ordenes ? 'selected' : ''}}>{{ $ordene-> Numero_Orden  }}</option>
                    @endforeach
                </select>
            {!! $errors->first('id_ordenes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero_orden') }}
            {{ Form::text('Numero_orden', $detallepedido->Numero_orden, ['class' => 'form-control' . ($errors->has('Numero_orden') ? ' is-invalid' : ''), 'placeholder' => 'Numero Orden']) }}
            {!! $errors->first('Numero_orden', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $detallepedido->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Calidad') }}
            {{ Form::text('Calidad', $detallepedido->Calidad, ['class' => 'form-control' . ($errors->has('Calidad') ? ' is-invalid' : ''), 'placeholder' => 'Calidad']) }}
            {!! $errors->first('Calidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descuento') }}
            {{ Form::text('Descuento', $detallepedido->Descuento, ['class' => 'form-control' . ($errors->has('Descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento']) }}
            {!! $errors->first('Descuento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('Total', $detallepedido->Total, ['class' => 'form-control' . ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('Total', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tamano') }}
            {{ Form::text('Tamano', $detallepedido->Tamano, ['class' => 'form-control' . ($errors->has('Tamano') ? ' is-invalid' : ''), 'placeholder' => 'Tamano']) }}
            {!! $errors->first('Tamano', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Color') }}
            {{ Form::text('Color', $detallepedido->Color, ['class' => 'form-control' . ($errors->has('Color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('Color', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_envio') }}
            {{ Form::date('Fecha_envio', $detallepedido->Fecha_envio, ['class' => 'form-control' . ($errors->has('Fecha_envio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Envio']) }}
            {!! $errors->first('Fecha_envio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Order_Detalle_id') }}
            {{ Form::text('Order_Detalle_id', $detallepedido->Order_Detalle_id, ['class' => 'form-control' . ($errors->has('Order_Detalle_id') ? ' is-invalid' : ''), 'placeholder' => 'Order Detalle Id']) }}
            {!! $errors->first('Order_Detalle_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_de_pago') }}
            {{ Form::date('Fecha_de_pago', $detallepedido->Fecha_de_pago, ['class' => 'form-control' . ($errors->has('Fecha_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Pago']) }}
            {!! $errors->first('Fecha_de_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>