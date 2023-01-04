@extends('layout.auth')

@section('title', 'Verifikácia emailovej adresy')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-5">

                <div class="card-body p-4">
                    <div class="text-center mt-4 mb-4 text-white-50">
                        <div>
                            <a href="https://www.demi.sk/" class="d-inline-block auth-logo">
                                <img src="{{ asset('img/admin-logo.png') }}" alt="" height="100">
                            </a>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <h5 class="text-primary">Potvrdťe svoju e-mailovú adresu</h5>
                    </div>

                    <div class="p-2 mt-4">
                        @if( session('resent') )
                            <div class="alert alert-success" role="alert">
                                Práve Vám bol poslaný e-mail s odkazom na potvrdenie registrácie!
                            </div>
                        @endif

                        Prosím skontrolujte si Vašu e-mailovú schránku.
                        <br><br>
                        Pokiaľ ste e-mail nedostali,
                        <a href="{{ route('verification.resend') }}">
                            kliknite SEM pre odoslanie ZNOVU.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
