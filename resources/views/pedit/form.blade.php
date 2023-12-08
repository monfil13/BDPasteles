<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_client') }}
            {{ Form::text('id_client', $pedit->id_client, ['class' => 'form-control' . ($errors->has('id_client') ? ' is-invalid' : ''), 'placeholder' => 'Id Client']) }}
            {!! $errors->first('id_client', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechapedido') }}
            {{ Form::text('fechapedido', $pedit->fechapedido, ['class' => 'form-control' . ($errors->has('fechapedido') ? ' is-invalid' : ''), 'placeholder' => 'Fechapedido']) }}
            {!! $errors->first('fechapedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>