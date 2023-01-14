@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Tabuľka', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Examples' => null,
            ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Filtre</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._filters')
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
                                    <h5 class="card-title mb-0">Sample table</h5>
                                </div>

                                <div class="col-sm-6 text-end">
                                    <a href="#" class="btn btn-dark waves-effect waves-light mr-3">
                                        <i class="mdi mdi-eye-off pr-2"></i> Hide
                                    </a>

                                    <a href="#" class="btn btn-info waves-effect waves-light mr-3">
                                        <i class="mdi mdi-file pr-2"></i> Export
                                    </a>

                                    <a href="#" class="btn btn-info waves-effect waves-light mr-3">
                                        <i class="mdi mdi-printer pr-2"></i> Print
                                    </a>

                                    <a href="#" class="btn btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-plus pr-2"></i> Add
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._table_advanced')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
