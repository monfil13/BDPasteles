@extends('layouts.app')

@section('template_title')
    {{ $sucursal->name ?? "{{ __('Mostrar') Sucursal" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Sucursal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sucursals.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $sucursal->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $sucursal->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $sucursal->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Recepcionista:</strong>
                            {{ $sucursal->nombrerecepcionista }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
