@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Examples', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Superadmin' => null,
            ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Zoznam položiek</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('superadmin.examples.create') }}" class="btn btn-success waves-effect waves-light float-end">
                                        <i class="mdi mdi-plus pe-2"></i> Pridať položku
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.examples._partials._table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
