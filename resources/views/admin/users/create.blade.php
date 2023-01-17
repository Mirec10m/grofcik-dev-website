@extends('layout.admin')

@section('page-title')
    Používatelia
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nová používateľ', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Používatelia' => route('users.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.users._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Nový používateľ</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('users.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                                        <i class="mdi mdi-format-list-bulleted pr-2"></i> Zoznam používateľov
                                    </a>
                                </div>
                            </div>

                            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.users._partials._form')

                                @include('admin._partials._buttons')
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
