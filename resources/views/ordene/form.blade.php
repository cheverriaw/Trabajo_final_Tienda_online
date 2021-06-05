<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('id_cliente') }}
                <select id="id_cliente" name="id_cliente" class="form-control">    
                    <option>------Seleccionar------</option>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}"  {{$cliente->id==$ordene->id_cliente ? 'selected' : ''}}>{{ $cliente->Nombre  }}</option>
                    @endforeach
                </select>
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Numero_Orden') }}
            {{ Form::text('Numero_Orden', $ordene->Numero_Orden, ['class' => 'form-control' . ($errors->has('Numero_Orden') ? ' is-invalid' : ''), 'placeholder' => 'Numero Orden']) }}
            {!! $errors->first('Numero_Orden', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pagos') }}
                <select id="id_pagos" name="id_pagos" class="form-control">    
                    <option>------Seleccionar------</option>
                    @foreach ($pagos as $pago)
                        <option value="{{ $pago->id }}"  {{$pago->id==$ordene->id_pagos ? 'selected' : ''}}>{{ $pago->Tipo_de_pago }}</option>
                    @endforeach
                </select>
            {!! $errors->first('id_pagos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_de_envio') }}
            {{ Form::date('Fecha_de_envio', $ordene->Fecha_de_envio, ['class' => 'form-control' . ($errors->has('Fecha_de_envio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Envio']) }}
            {!! $errors->first('Fecha_de_envio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado_transacción') }}
            {{ Form::text('Estado_transacción', $ordene->Estado_transacción, ['class' => 'form-control' . ($errors->has('Estado_transacción') ? ' is-invalid' : ''), 'placeholder' => 'Estado Transacción']) }}
            {!! $errors->first('Estado_transacción', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pagado') }}
            {{ Form::text('Pagado', $ordene->Pagado, ['class' => 'form-control' . ($errors->has('Pagado') ? ' is-invalid' : ''), 'placeholder' => 'Pagado']) }}
            {!! $errors->first('Pagado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_de_pago') }}
            {{ Form::date('Fecha_de_pago', $ordene->Fecha_de_pago, ['class' => 'form-control' . ($errors->has('Fecha_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Pago']) }}
            {!! $errors->first('Fecha_de_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>