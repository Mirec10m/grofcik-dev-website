@extends('layout.auth')

@section('title', 'Odhlásenie')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-5">

                <div class="card-body p-4 text-center">
                    <div class="text-center mt-4 mb-4 text-white-50">
                        <div>
                            <a href="https://www.demi.sk/" class="d-inline-block auth-logo">
                                <img src="{{ asset('img/admin-logo.svg') }}" alt="" height="100">
                            </a>
                        </div>
                    </div>

                    <lord-icon src="https://cdn.lordicon.com/hzomhqxz.json" trigger="loop" colors="primary:#405189,secondary:#08a88a" style="width:180px;height:180px"></lord-icon>

                    <div class="mt-4 pt-2">
                        <h5>Boli ste odhlásený</h5>

                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="btn btn-success w-100">Prihlásiť sa</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
