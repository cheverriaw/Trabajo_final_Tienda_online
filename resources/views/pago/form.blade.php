<div class="box box-info padding-1">
    <div class="box-body">
        
      
        <div class="form-group">
            {{ Form::label('Tipo_de_pago') }}
            <select id="Tipo_de_pago" name="Tipo_de_pago" class="form-control">    
                <option>------Seleccionar------</option>
                        <option value="Efectivo"  {{$pago->Tipo_de_pago=='Efectivo' ? 'selected' : ''}}>Efectivo</option>
                        <option value="targeta de credito"  {{$pago->Tipo_de_pago=='targeta de credito' ? 'selected' : ''}}>targeta de credito</option>
            </select>
            {!! $errors->first('Tipo_de_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Permitido') }}
            <select id="Permitido" name="Permitido" class="form-control">    
                <option>------Seleccionar------</option>
                        <option value="No"  {{$pago->Permitido=='NO' ? 'selected' : ''}}>NO</option>
                        <option value="SI"  {{$pago->Permitido=='SI' ? 'selected' : ''}}>Si</option>
            </select>
            {!! $errors->first('Permitido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
      

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>