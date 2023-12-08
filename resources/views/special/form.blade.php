<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_client', $special->id_client, ['class' => 'form-control' . ($errors->has('id_client') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_client', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pastelero') }}
            {{ Form::text('id_pasteler', $special->id_pasteler, ['class' => 'form-control' . ($errors->has('id_pasteler') ? ' is-invalid' : ''), 'placeholder' => 'Id Pastelero']) }}
            {!! $errors->first('id_pasteler', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripcion', $special->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sabor') }}
            {{ Form::text('sabor', $special->sabor, ['class' => 'form-control' . ($errors->has('sabor') ? ' is-invalid' : ''), 'placeholder' => 'Sabor']) }}
            {!! $errors->first('sabor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha-Hora del Pedido') }}
            {{ Form::text('fechayhorapedido', $special->fechayhorapedido, ['class' => 'form-control' . ($errors->has('fechayhorapedido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha-Hora del Pedido']) }}
            {!! $errors->first('fechayhorapedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
        <a class="btn btn-primary" href="{{ route('special.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>
