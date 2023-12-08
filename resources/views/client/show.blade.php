@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? "{{ __('Mostrar') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar Datos') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $client->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $client->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $client->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
