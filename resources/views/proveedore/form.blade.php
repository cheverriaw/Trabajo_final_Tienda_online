<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_Compania') }}
            {{ Form::text('Nombre_Compania', $proveedore->Nombre_Compania, ['class' => 'form-control' . ($errors->has('Nombre_Compania') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Compania']) }}
            {!! $errors->first('Nombre_Compania', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contacto_Name') }}
            {{ Form::text('Contacto_Name', $proveedore->Contacto_Name, ['class' => 'form-control' . ($errors->has('Contacto_Name') ? ' is-invalid' : ''), 'placeholder' => 'Contacto Name']) }}
            {!! $errors->first('Contacto_Name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contacto_Lastname') }}
            {{ Form::text('Contacto_Lastname', $proveedore->Contacto_Lastname, ['class' => 'form-control' . ($errors->has('Contacto_Lastname') ? ' is-invalid' : ''), 'placeholder' => 'Contacto Lastname']) }}
            {!! $errors->first('Contacto_Lastname', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $proveedore->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('Ciudad', $proveedore->Ciudad, ['class' => 'form-control' . ($errors->has('Ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('Ciudad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $proveedore->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo_postal') }}
            {{ Form::text('Codigo_postal', $proveedore->Codigo_postal, ['class' => 'form-control' . ($errors->has('Codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
            {!! $errors->first('Codigo_postal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $proveedore->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $proveedore->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Metodos_de_pagos') }}
            {{ Form::text('Metodos_de_pagos', $proveedore->Metodos_de_pagos, ['class' => 'form-control' . ($errors->has('Metodos_de_pagos') ? ' is-invalid' : ''), 'placeholder' => 'Metodos De Pagos']) }}
            {!! $errors->first('Metodos_de_pagos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_descuento') }}
            {{ Form::text('Tipo_descuento', $proveedore->Tipo_descuento, ['class' => 'form-control' . ($errors->has('Tipo_descuento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Descuento']) }}
            {!! $errors->first('Tipo_descuento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Notas') }}
            {{ Form::text('Notas', $proveedore->Notas, ['class' => 'form-control' . ($errors->has('Notas') ? ' is-invalid' : ''), 'placeholder' => 'Notas']) }}
            {!! $errors->first('Notas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descuento_disponible') }}
            {{ Form::text('Descuento_disponible', $proveedore->Descuento_disponible, ['class' => 'form-control' . ($errors->has('Descuento_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Descuento Disponible']) }}
            {!! $errors->first('Descuento_disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pais') }}
            {{ Form::text('Pais', $proveedore->Pais, ['class' => 'form-control' . ($errors->has('Pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
            {!! $errors->first('Pais', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>