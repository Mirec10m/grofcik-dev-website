@extends('layout.admin')

@section('page-title')
    Orders
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Orders', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Superadmin' => null,
            ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Zoznam objednávok</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.orders._partials._table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
