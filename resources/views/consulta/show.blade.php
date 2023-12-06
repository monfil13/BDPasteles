@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? "{{ __('Show') Consulta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consulta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('home') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        z

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
