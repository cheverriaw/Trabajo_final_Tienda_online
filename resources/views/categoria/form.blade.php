<div class="box box-info padding-1">
    <div class="box-body">
        
    

        <div class="input-group-text">
           
            {{ Form::text('nombre_categoria', $categoria->nombre_categoria, ['class' => 'form-control' . ($errors->has('nombre_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Categoria']) }}
            {!! $errors->first('nombre_categoria', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $categoria->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            <input type="file" name="imagenes" id="imagenes" class="form-control">
            {!! $errors->first('imagenes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            <select id="activo" name="activo" class="form-control">    
                <option>------Seleccionar------</option>
                        <option value="0"  {{$categoria->activo==0 ? 'selected' : ''}}>Activo</option>
                        <option value="1"  {{$categoria->activo==1 ? 'selected' : ''}}>Inactivo</option>
            </select>
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


