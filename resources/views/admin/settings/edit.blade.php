@extends('layout.admin')

@section('page-title')
    Nastavenia
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Profil', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Nastavenia' => null,
            ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Editovať profil</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('dashboard.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                                        <i class="fa fa-reply pr-2"></i> Späť na úvod
                                    </a>
                                </div>
                            </div>

                            <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.settings._partials._form')

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
