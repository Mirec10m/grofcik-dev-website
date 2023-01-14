@extends('layout.error')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center pt-4">
                <div class="">
                    <img src="{{ asset('img/error.svg') }}" alt="" class="error-basic-img move-animation">
                </div>
                <div class="mt-n4">
                    <h1 class="display-1 fw-medium">404</h1>
                    <h3 class="text-uppercase">Stránka nebola nájdená</h3>
                    <p class="text-muted mb-4">The page you are looking for not available!</p>
                    <a href="index.html" class="btn btn-success"><i class="mdi mdi-home me-1"></i>Back to home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
