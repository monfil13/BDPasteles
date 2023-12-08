@extends('layouts.app')

@section('template_title')
    {{ $special->name ?? "{{ __('Show') Special" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Special</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('specials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Client:</strong>
                            {{ $special->id_client }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pasteler:</strong>
                            {{ $special->id_pasteler }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $special->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Sabor:</strong>
                            {{ $special->sabor }}
                        </div>
                        <div class="form-group">
                            <strong>Fechayhorapedido:</strong>
                            {{ $special->fechayhorapedido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
