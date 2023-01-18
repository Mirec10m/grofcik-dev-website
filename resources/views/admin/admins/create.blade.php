@extends('layout.admin')

@section('page-title')
    Používatelia
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nový administrátor', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Administrátori' => route('admins.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.admins._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Nový administrátor</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('admins.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                                        <i class="mdi mdi-format-list-bulleted pe-2"></i> Zoznam administrátorov
                                    </a>
                                </div>
                            </div>

                            <form action="{{ route('admins.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.admins._partials._form')

                                @include('admin._partials._buttons')
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
