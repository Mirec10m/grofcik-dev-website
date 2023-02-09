@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Formulár', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Superadmin' => null,
            ]])

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Language Tabs</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <div class="form-check form-switch form-switch-info form-switch-lg">
                                        <label class="form-label">With validation</label>
                                        <input id="with-validation" type="checkbox" class="form-check-input">
                                    </div>
                                </div>

                                <script>
                                    document.getElementById('with-validation').addEventListener('change', function () {
                                        let checked = this.checked;
                                        let selector = checked ? '.nav-tabs .nav-link,input,textarea,select' : '.is-invalid';
                                        let method = checked ? 'add' : 'remove';

                                        document.querySelectorAll(selector).forEach(function (e) {
                                            e.classList[method]('is-invalid');
                                        });
                                    });
                                </script>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._lang_tabs')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Select2</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._select2')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">TinyMCE</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._tinymce')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Switches, checkboxes, radios</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._switches')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Pickers</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._pickers')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Others</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    @include('admin.superadmin.pages._partials._others')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
