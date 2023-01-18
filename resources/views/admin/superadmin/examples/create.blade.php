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
                            <form action="{{ route('superadmin.examples.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.superadmin.examples._partials._form', [ 'card_title' => "Nová položka" ])

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
