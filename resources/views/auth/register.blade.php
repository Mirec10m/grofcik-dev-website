@extends('layout.auth')

@section('title', 'Registrácia')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Registrácia</h5>
                    </div>

                    <div class="p-2 mt-4">
                        <form class="needs-validation" action="{{ route('register') }}">

                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                                <input name="email" type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="E-mail">
                                @include('admin._partials._errors', [ 'column' => 'email' ])
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Používateľské meno <span class="text-danger">*</span></label>
                                <input name="username" type="text" value="{{ old('username') }}" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" id="username" placeholder="Používateľské meno">
                                @include('admin._partials._errors', [ 'column' => 'email' ])
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password">Heslo <b class="text-danger">*</b></label>
                                <div class="position-relative auth-pass-inputgroup">
                                    <input name="password" type="password" class="form-control pe-5 password-input {{ $errors->has('password') ? 'is-invalid' : '' }}" onpaste="return false" placeholder="Heslo" id="password" aria-describedby="passwordInput">
                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    @include('admin._partials._errors', [ 'column' => 'password' ])
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="password-confirm">Opakujte heslo <b class="text-danger">*</b></label>
                                <div class="position-relative auth-pass-inputgroup">
                                    <input name="password_confirmation" type="password" class="form-control pe-5 password-input {{ $errors->has('password') ? 'is-invalid' : '' }}" onpaste="return false" id="password-confirm" aria-describedby="passwordInput">
                                </div>
                            </div>

                            <div class="form-check">
                                <input name="gdpr" class="form-check-input" type="checkbox" value="1" id="gdpr" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="gdpr">
                                    Súhlasím so spracovaním
                                    <a href="javascript:void(0)" target="_blank" class="error-color">
                                        osobných údajov.
                                    </a>
                                    <b class="error-color">*</b>
                                </label>
                                @include('admin._partials._errors', [ 'column' => 'gdpr' ])
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-success w-100" type="submit">Registrovať</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('captcha')
    {{-- }}
    <script src="https://www.google.com/recaptcha/api.js?render={sem_vlozte_ID_bez_zatvoriek}"></script>
    {{ --}}
@endsection

@section('js')
    {{-- }}
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('{sem_vlozte_ID_bez_zatvoriek}', {action: 'login'}).then(function(token) {
                $('.form-captcha').prepend('<input type="hidden" name="captcha" value="' + token + '">');
            });
        });
    </script>
    {{ --}}
@endsection
