@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Examples</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h4 class="mt-0 header-title">Galéria položky - {{-- $item->name_sk --}}Lorem ipsum</h4>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <p class="text-muted m-b-30 text-right">
                                        <a href="{{ route('examples.index') }}" class="btn btn-primary waves-effect waves-light">
                                            <i class="fa fa-list pr-2"></i>
                                            Zoznam položiek
                                        </a>
                                    </p>
                                </div>
                            </div>

                            @include('admin._partials._alert')

                            <form action="javascript:void(0)" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-9">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Obrázok</label>
                                                <input name="image" type="file" value="{{ old('image', isset($item) ? $item->image : '') }}" class="form-control filestyle {{ $errors->has('image') ? 'parsley-error' : '' }}" data-buttonname="btn-secondary">
                                                @include('admin._partials._errors', ['column' => 'image'])
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                @include('admin._partials._buttons')
                            </form>

                            <div class="dropdown-divider"></div>

                            <div class="row mt-3">
                                <div class="col-sm-12">
                                    <h4 class="mt-0 header-title">Obrázok</h4>

                                    @if(1)
                                        <div class="">
                                            <div class="row">
                                                @for($i = 0; $i < 8; $i++)
                                                <div class="col-sm-3">
                                                    <div class="image-wrapper mb-5">
                                                        <img src="{{ asset('img/image-placeholder.jpg') }}" class="img-responsive">
                                                        <div class="image-wrapper-back">
                                                            <div class="image-wrapper-back-actions">
                                                                <a href="{{ asset('img/image-placeholder.jpg') }}" class="show-icon image-popup-vertical-fit">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                                <form action="javascript:void(0)" method="post">
                                                                    @csrf
                                                                    <button data-entity="{{ 'Obrázok - ' . 'image-placeholder.jpg' }}" class="delete-button delete-icon pointer" type="button">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endfor
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
    </div>
@endsection
