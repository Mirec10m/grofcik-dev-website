@extends('layout.admin')

@section('page-title')
    Značky článkov
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nová značka', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Značky článkov' => route('post-tags.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.post_tags._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('post-tags.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.post_tags._partials._form', [ 'card_title' => "Nová značka" ])

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
