@extends('layouts.app')

@section('template_title')
    {{ $pedit->name ?? "{{ __('Mostrar') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedits.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $pedit->id_client }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pedido:</strong>
                            {{ $pedit->fechapedido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
