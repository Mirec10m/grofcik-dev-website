@extends('layout.error')

@section('content')
    <div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="auth-page-content overflow-hidden p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="text-center">
                            <div class="error-500 position-relative">
                                <img src="{{ asset('img/error-500.png') }}" alt="" class="img-fluid error-500-img error-img" />

                                <h1 class="title text-muted">500</h1>
                            </div>
                            <div>
                                <h4>Interná chyba servera</h4>

                                <p class="text-muted w-75 mx-auto">Chyba servera</p>

                                <a href="index.html" class="btn btn-success"><i class="mdi mdi-home me-1"></i>Back to home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
