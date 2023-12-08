<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Id Cliente') }}
            {{ Form::text('id_client', $pedit->id_client, ['class' => 'form-control' . ($errors->has('id_client') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_client', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Pedido') }}
            {{ Form::text('fechapedido', $pedit->fechapedido, ['class' => 'form-control' . ($errors->has('fechapedido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pedido']) }}
            {!! $errors->first('fechapedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
        <a class="btn btn-primary" href="{{ route('pedit.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>
