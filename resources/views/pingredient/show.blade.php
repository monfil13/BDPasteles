@extends('layouts.app')

@section('template_title')
    {{ $pingredient->name ?? "{{ __('Show') Pingredient" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pingredient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pingredients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cake:</strong>
                            {{ $pingredient->id_cake }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ingredient:</strong>
                            {{ $pingredient->id_ingredient }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $pingredient->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
