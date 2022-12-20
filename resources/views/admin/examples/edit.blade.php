@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Examples', 'crumbs' => [ 'Demibox' ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Editovať položku - {{-- $item->name_sk --}}Lorem ipsum</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('examples.index') }}" type="button" class="btn btn-primary waves-effect waves-light float-end">
                                        <i class="mdi mdi-format-list-bulleted pr-2"></i> Zoznam položiek
                                    </a>
                                </div>
                            </div>

                            @include('admin._partials._alert')

                            <form action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                @csrf

                                @include('admin.examples._partials._form')

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
                                        <div class="image-wrapper mb-3">
                                            <img src="{{ asset('img/image-placeholder.jpg') }}" class="img-fluid">

                                            <div class="image-wrapper-back">
                                                <div class="image-wrapper-back-actions">
                                                    <a href="{{ asset('img/image-placeholder.jpg') }}" class="show-icon image-popup-vertical-fit">
                                                        <i class="mdi mdi-eye-outline"></i>
                                                    </a>

                                                    <form action="javascript:void(0)" method="post">
                                                        @csrf
                                                        <button data-entity="{{ 'Obrázok - ' . 'image-placeholder.jpg' }}" class="delete-button delete-icon pointer" type="button">
                                                            <i class="mdi mdi-trash-can-outline"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
