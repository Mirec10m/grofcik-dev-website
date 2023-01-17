@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Úprava položky - ' . str(/*$item->name_sk*/'Lorem ipsum')->limit(30), 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Examples' => route('superadmin.examples.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.superadmin.examples._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Editovať položku - {{-- $item->name_sk --}}Lorem ipsum</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('superadmin.examples.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                                        <i class="mdi mdi-format-list-bulleted pr-2"></i> Zoznam položiek
                                    </a>
                                </div>
                            </div>

                            <form action="{{ route('superadmin.examples.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                @include('admin.superadmin.examples._partials._form')

                                @include('admin._partials._buttons')
                            </form>


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
@endsection
