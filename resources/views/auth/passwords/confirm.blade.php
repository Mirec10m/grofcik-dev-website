@extends('layout.auth')

@section('title', 'Potvrdenie hesla')

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
                        <h5 class="text-primary">Potvrdenie heslom</h5>
                        <p class="text-muted">Pred pokračovaním prosím zadajte Vaše heslo.</p>
                    </div>

                    <div class="p-2">
                        <form action="{{ route('password.confirm') }}" method="post">

                            @csrf

                            <div class="mb-3">
                                <div class="float-end">
                                    <a href="{{ route('password.request') }}" class="text-muted">Zabudli ste heslo?</a>
                                </div>

                                <label class="form-label" for="password">Heslo</label>
                                <div class="position-relative auth-pass-inputgroup mb-3">
                                    <input name="password" type="password" class="form-control pe-5 password-input {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Enter password" id="password">
                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                </div>
                                @include('admin._partials._errors', ['column' => 'password'])
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-success w-100" type="submit">Potvrdiť</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
