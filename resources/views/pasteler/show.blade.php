@extends('layouts.app')

@section('template_title')
    {{ $pasteler->name ?? "{{ __('Mostrar') Pastelero" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pastelero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pastelers.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pasteler->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $pasteler->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Alias:</strong>
                            {{ $pasteler->alias }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $pasteler->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Años Trabajados:</strong>
                            {{ $pasteler->añostrabajados }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
