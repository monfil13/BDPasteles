<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_client') }}
            {{ Form::text('id_client', $special->id_client, ['class' => 'form-control' . ($errors->has('id_client') ? ' is-invalid' : ''), 'placeholder' => 'Id Client']) }}
            {!! $errors->first('id_client', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pasteler') }}
            {{ Form::text('id_pasteler', $special->id_pasteler, ['class' => 'form-control' . ($errors->has('id_pasteler') ? ' is-invalid' : ''), 'placeholder' => 'Id Pasteler']) }}
            {!! $errors->first('id_pasteler', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $special->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sabor') }}
            {{ Form::text('sabor', $special->sabor, ['class' => 'form-control' . ($errors->has('sabor') ? ' is-invalid' : ''), 'placeholder' => 'Sabor']) }}
            {!! $errors->first('sabor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechayhorapedido') }}
            {{ Form::text('fechayhorapedido', $special->fechayhorapedido, ['class' => 'form-control' . ($errors->has('fechayhorapedido') ? ' is-invalid' : ''), 'placeholder' => 'Fechayhorapedido']) }}
            {!! $errors->first('fechayhorapedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>