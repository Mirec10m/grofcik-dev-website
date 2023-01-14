@extends('layout.error')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center pt-4">
                <div class="">
                    <img src="{{ asset('img/error.svg') }}" alt="" class="error-basic-img move-animation">
                </div>
                <div class="mt-n4">
                    <h1 class="display-1 fw-medium">500</h1>
                    <h3 class="text-uppercase">Chyba servera</h3>
                    <a href="{{ route('dashboard.index') }}" class="btn btn-success"><i class="mdi mdi-home me-1"></i>Späť na domov</a>
                </div>
            </div>
        </div>
    </div>
@endsection
