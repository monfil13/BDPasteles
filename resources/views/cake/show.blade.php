@extends('layouts.app')

@section('template_title')
    {{ $cake->name ?? "{{ __('Mostrar') Pastel" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Pastel</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cakes.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cake->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $cake->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
