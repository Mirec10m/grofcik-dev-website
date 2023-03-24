@extends('layout.admin')

@section('page-title')
    Tagy článkov
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Tagy článkov', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Zoznam tagov</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('post-tags.create') }}" class="btn btn-success waves-effect waves-light float-end">
                                        <i class="mdi mdi-plus pe-2"></i> Pridať tag
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.post_tags._partials._table')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
