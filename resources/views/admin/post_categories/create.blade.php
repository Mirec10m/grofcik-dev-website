@extends('layout.admin')

@section('page-title')
    Kategórie článkov
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nová kategória', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Kategórie článkov' => route('post-categories.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.post_categories._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('post-categories.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.post_categories._partials._form', [ 'card_title' => "Nová kategória" ])

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
