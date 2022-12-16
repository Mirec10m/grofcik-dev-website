@extends('layout.auth')

@section('title', 'Obnova zabudnutého hesla')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Obnova zabudnutého hesla</h5>
                        <p class="text-muted">Zadajte prosím Vaše nové heslo.</p>
                    </div>

                    <div class="p-2">
                        <form action="{{ route('password.update') }}">

                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input name="email" type="text" value="{{ $email ?? old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="E-mail">
                                @include('admin._partials._errors', ['column' => 'email'])
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">Heslo <b class="text-danger">*</b></label>
                                <div class="position-relative auth-pass-inputgroup">
                                    <input name="password" type="password" class="form-control pe-5 password-input {{ $errors->has('password') ? 'is-invalid' : '' }}" onpaste="return false" placeholder="Heslo" id="password" aria-describedby="passwordInput">
                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    @include('admin._partials._errors', ['column' => 'password'])
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password-confirm">Opakujte heslo <b class="text-danger">*</b></label>
                                <div class="position-relative auth-pass-inputgroup">
                                    <input name="password_confirmation" type="password" class="form-control pe-5 password-input {{ $errors->has('password') ? 'is-invalid' : '' }}" onpaste="return false" id="password-confirm" aria-describedby="passwordInput">
                                </div>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-success w-100" type="submit">Potvrdiť</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
