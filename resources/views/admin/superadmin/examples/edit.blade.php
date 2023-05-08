@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Položka - ' . str(/*$item->name_sk*/'Lorem ipsum')->limit(30), 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Superadmin' => null,
                'Examples' => route('superadmin.examples.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.superadmin.examples._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('superadmin.examples.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                @include('admin.superadmin.examples._partials._form', [ 'card_title' => "Editovať položku" ])

                                @include('admin._partials._buttons')
                            </form>

                            <div id="image-view">
                                <div class="border-top mb-3"></div>

                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <h5 class="card-title mb-0">Obrázok</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    @if(1)
                                        <div class="col-sm-3">
                                            @include('admin._partials._image', [
                                                'thumb' => asset('img/image-placeholder.jpg'),
                                                'image' => asset('img/image-placeholder.jpg'),
                                                'delete' => 'javascript:void(0)',
                                                'entity' => 'image-placeholder.jpg',
                                                'gallery' => 'gallery_id',
                                            ])
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
