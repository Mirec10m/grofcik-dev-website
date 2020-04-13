@extends('layout.auth')
@section('title', '- Potvrdenie hesla')

@section('content')
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0">
                    <a href="https://www.demi.sk/" target="_blank" class="logo logo-admin">
                        <img src="{{ asset('img/admin-logo.png') }}" height="44" alt="Logo DeMi Studio">
                    </a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Potvrdenie heslom</h4>
                    <p class="text-muted text-center">Pred pokračovaním prosím zadajte Vaše heslo.</p>

                    <div class="card-body">
                        <form action="{{ route('password.confirm') }}" method="post" class="form-horizontal">
                            @csrf

                            <div class="form-group">
                                <label for="password">Heslo <b>*</b></label>
                                <input name="password" type="password" class="form-control {{ $errors->has('password') ? 'parsley-error' : '' }}" id="password" placeholder="Heslo">

                                @include('admin._partials._errors', ['column' => 'password'])
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                        Potvrdiť
                                    </button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="{{ route('password.request') }}" class="text-muted">
                                        <i class="mdi mdi-lock"></i>
                                        Zabudli ste heslo?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="m-t-40 text-center">
            <p>
                © {{ \Carbon\Carbon::now()->year }} DeMi-Box. Vytvorila spoločnosť
                <a href="https://www.demi.sk/" target="_blank">
                    <b>DeMi Studio</b>.
                </a>
            </p>
        </div>
    </div>
@endsection
