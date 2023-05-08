@extends('layout.admin')

@section('page-title')
    Používatelia
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nový používateľ', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Používatelia' => route('users.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.users._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.users._partials._form', [ 'card_title' => "Nový používateľ" ])

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
