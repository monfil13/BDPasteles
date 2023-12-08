@extends('layouts.app')

@section('template_title')
    {{ $special->name ?? "{{ __('Mostrar') Pedido Especial" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pedido Especial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('specials.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $special->id_client }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pastelero:</strong>
                            {{ $special->id_pasteler }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $special->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Sabor:</strong>
                            {{ $special->sabor }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha-Hora del Pedido:</strong>
                            {{ $special->fechayhorapedido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
