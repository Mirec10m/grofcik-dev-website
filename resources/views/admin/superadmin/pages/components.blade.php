@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Komponenty', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Superadmin' => null,
            ]])

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Buttons</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._buttons')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Button Loader</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._button_loader')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
