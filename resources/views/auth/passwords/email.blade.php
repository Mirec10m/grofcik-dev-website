@extends('layout.auth')

@section('title', 'Zabudnuté heslo')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-5">

                <div class="card-body p-4">
                    <div class="text-center mt-4 mb-4 text-white-50">
                        <div>
                            <a href="https://www.demi.sk/" class="d-inline-block auth-logo">
                                <img src="{{ asset('img/admin-logo.svg') }}" alt="" height="100">
                            </a>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <h5 class="text-primary">Zabudnuté heslo?</h5>

                        <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl">
                        </lord-icon>
                    </div>

                    <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                        {{ session('status') ? 'Práve Vám bol poslaný e-mail s odkazom na obnovenie hesla!' : 'Pre obnovu hesla zadajte prosím Váš e-mail!' }}
                    </div>

                    <div class="p-2">
                        <form action="{{ route('password.email') }}" method="post">

                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input name="email" type="text" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="E-mail">
                                @include('admin._partials._errors', [ 'column' => 'email' ])
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-success w-100" type="submit">Obnoviť heslo</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <p class="mb-0">Spomenul som si na moje heslo...
                    <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline">
                        Prihlásiť sa
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
