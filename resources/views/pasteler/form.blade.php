<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $pasteler->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('apellido', $pasteler->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Alias') }}
            {{ Form::text('alias', $pasteler->alias, ['class' => 'form-control' . ($errors->has('alias') ? ' is-invalid' : ''), 'placeholder' => 'Alias']) }}
            {!! $errors->first('alias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Teléfono') }}
            {{ Form::text('telefono', $pasteler->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Años Trabajados') }}
            {{ Form::text('añostrabajados', $pasteler->añostrabajados, ['class' => 'form-control' . ($errors->has('añostrabajados') ? ' is-invalid' : ''), 'placeholder' => 'Años Trabajados']) }}
            {!! $errors->first('añostrabajados', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
        <a class="btn btn-primary" href="{{ route('pasteler.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>
