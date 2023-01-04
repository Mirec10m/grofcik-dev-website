@extends('layout.admin')

@section('page-title')
    Nastavenia
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nastavenia', 'crumbs' => [ 'Demibox' ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Zmena hesla</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('dashboard.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                                        <i class="fa fa-reply pr-2"></i> Späť na úvod
                                    </a>
                                </div>
                            </div>

                            <form action="{{ route('settings.change') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.settings._partials._form_password')

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
