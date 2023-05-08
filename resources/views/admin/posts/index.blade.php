@extends('layout.admin')

@section('page-title')
    Články
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Články', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Zoznam článkov</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('posts.create') }}" class="btn btn-success waves-effect waves-light float-end">
                                        <i class="mdi mdi-plus pe-2"></i> Pridať článok
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.posts._partials._table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
