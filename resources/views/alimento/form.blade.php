<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $alimento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('libras') }}
            {{ Form::text('libras', $alimento->libras, ['class' => 'form-control' . ($errors->has('libras') ? ' is-invalid' : ''), 'placeholder' => 'Libras']) }}
            {!! $errors->first('libras', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $alimento->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $alimento->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('lote') }}
            {{ Form::text('lote', $alimento->lote, ['class' => 'form-control' . ($errors->has('lote') ? ' is-invalid' : ''), 'placeholder' => 'Lote']) }}
            {!! $errors->first('lote', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('fecha de caducidad') }}
            {{ Form::text('fechacaducidad', $alimento->fechacaducidad, ['class' => 'form-control' . ($errors->has('fechacaducidad') ? ' is-invalid' : ''), 'placeholder' => 'Fecha caducidad']) }}
            {!! $errors->first('fechacaducidad', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>