@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Tabuľka', 'crumbs' => [ 'Demibox' => null, 'Examples' => null, ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Sample table</h5>
                                </div>

                                <div class="col-sm-6 text-end">
                                    <a href="#" class="btn btn-dark waves-effect waves-light mr-3">
                                        <i class="mdi mdi-eye-off pr-2"></i> Hide
                                    </a>

                                    <a href="#" class="btn btn-info waves-effect waves-light mr-3">
                                        <i class="mdi mdi-file pr-2"></i> Export
                                    </a>

                                    <a href="#" class="btn btn-info waves-effect waves-light mr-3">
                                        <i class="mdi mdi-printer pr-2"></i> Print
                                    </a>

                                    <a href="#" class="btn btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-plus pr-2"></i> Add
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">

                                    <table id="example" data-order='[[1, "asc"]]' class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th data-orderable="false">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th>
                                            <th data-order="true">#</th>
                                            <th>Názov</th>
                                            <th>Typ</th>
                                            <th>Cena</th>
                                            <th>Kategória</th>
                                            <th>Dátum distribúcie</th>
                                            <th>Dokončené</th>
                                            <th data-orderable="false">Akcie</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($i = 1; $i < 101; $i++)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </td>
                                                <td>{{ $i }}</td>
                                                <td>Lorem ipsum</td>
                                                <td>Lorem ipsum</td>
                                                <td>24,99 €</td>
                                                <td>Lorem ipsum</td>
                                                <td>05. 12. 2019</td>
                                                <td>
                                                    @if($i % 2)
                                                        <i class="mdi mdi-check-bold text-success fs-4"></i>
                                                    @else
                                                        <i class="mdi mdi-close-thick text-danger fs-4"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-dark btn-sm dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Možnosti
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <a href="{{ route('examples.edit') }}" class="dropdown-item">
                                                                    <i class="mdi mdi-lead-pencil action-icon"></i> Editovať
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('examples.gallery') }}" class="dropdown-item">
                                                                    <i class="mdi mdi-image-multiple-outline action-icon"></i> Galéria
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <form action="{{ route('examples.destroy') }}" method="post" style="display: inline-block; width: 100%;">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button data-entity="{{ 'Položka - ' . 'Lorem ipsum' }}" class="alert-delete dropdown-item pointer" type="button">
                                                                        <i class="mdi mdi-trash-can-outline action-icon"></i> Vymazať
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
