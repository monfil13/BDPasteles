<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Id Pastel') }}
            {{ Form::text('id_cake', $pingredient->id_cake, ['class' => 'form-control' . ($errors->has('id_cake') ? ' is-invalid' : ''), 'placeholder' => 'Id Pastel']) }}
            {!! $errors->first('id_cake', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Ingrediente') }}
            {{ Form::text('id_ingredient', $pingredient->id_ingredient, ['class' => 'form-control' . ($errors->has('id_ingredient') ? ' is-invalid' : ''), 'placeholder' => 'Id Ingrediente']) }}
            {!! $errors->first('id_ingredient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad de Ingrediente') }}
            {{ Form::text('cantidad', $pingredient->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad de Ingrediente']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
        <a class="btn btn-primary" href="{{ route('pingredient.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>
