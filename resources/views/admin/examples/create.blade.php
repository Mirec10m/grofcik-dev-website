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
                                    <h4 class="mt-0 header-title">Nová položka</h4>
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

                            <form action="{{ route('examples.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!--include('admin.examples._partials._form')-->
                                    <div class="row mb-3">
                                        <div class="col-sm-12 col-md-9">

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>
                                                            Name
                                                        </label>
                                                        <input name="name" type="text" value="{{ old("name") }}" class="form-control {{ $errors->has("name") ? 'parsley-error' : '' }}">
                                                        @include('admin._partials._errors', ['column' => "name"])
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Profile Image</label>
                                                        <input name="image" type="file" value="{{ old('image') }}" class="form-control filestyle {{ $errors->has('image') ? 'parsley-error' : '' }}" data-buttonname="btn-secondary">
                                                        @include('admin._partials._errors', ['column' => 'image'])
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @include('admin._partials._buttons')
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
