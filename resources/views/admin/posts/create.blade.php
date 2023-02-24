@extends('layout.admin')

@section('page-title')
    Články
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nový článok', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Články' => route('posts.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.posts._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <form id="post-draft-form" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" data-draft-url="{{ route('posts.draft.save') }}">
                                @csrf
                                <input type="hidden" name="draft_id" value="">

                                @include('admin.posts._partials._form', [ 'card_title' => "Nový článok" ])

                                @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
