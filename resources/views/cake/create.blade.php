@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Cake
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Cake</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cakes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cake.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection