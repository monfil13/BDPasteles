@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Pedit
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Pedit</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pedits.update', $pedit->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pedit.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
