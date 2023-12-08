@extends('layouts.app')

@section('template_title')
    {{ $pasteler->name ?? "{{ __('Show') Pasteler" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pasteler</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pastelers.index') }}"> {{ __('Back') }}</a>
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
                            <strong>Telefono:</strong>
                            {{ $pasteler->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Añostrabajados:</strong>
                            {{ $pasteler->añostrabajados }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
