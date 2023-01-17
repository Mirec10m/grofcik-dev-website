@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nová položka', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Examples' => route('superadmin.examples.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.superadmin.examples._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Nová položka</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('superadmin.examples.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                                        <i class="mdi mdi-format-list-bulleted pr-2"></i> Zoznam položiek
                                    </a>
                                </div>
                            </div>

                            <form action="{{ route('superadmin.examples.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.superadmin.examples._partials._form')

                                @include('admin._partials._buttons')
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
