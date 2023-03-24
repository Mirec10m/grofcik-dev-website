@extends('layout.admin')

@section('page-title')
    Tagy článkov
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nový tag', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Tagy článkov' => route('post-tags.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.post_tags._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('post-tags.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.post_tags._partials._form', [ 'card_title' => "Nový tag" ])

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
