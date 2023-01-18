@extends('layout.admin')

@section('page-title')
    Používatelia
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Úprava administrátora - ' . str($admin->full_name)->limit(30), 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Administrátori' => route('admins.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.admins._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admins.update', $admin) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                @include('admin.admins._partials._form', [ 'card_title' => "Editovať administrátora - $admin->full_name" ])

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
