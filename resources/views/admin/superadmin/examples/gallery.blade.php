@extends('layout.admin')

@section('page-title')
    Examples
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => /* '$item->name_sk - Galéria' */'Lorem ipsum - Galéria', 'crumbs' => [ 'Demibox' => null, 'Examples' => null, 'Sekcia' => route('examples.index'), ]])

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h5 class="card-title mb-0">Galéria položky - {{-- $item->name_sk --}}Lorem ipsum</h5>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('examples.index') }}" class="btn btn-primary waves-effect waves-light float-end">
                                        <i class="fa fa-list pr-2"></i> Zoznam položiek
                                    </a>
                                </div>
                            </div>

                            <form action="{{ route('examples.upload') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-sm-4">

                                        <div>
                                            <label for="image" class="form-label">Obrázok</label>
                                            <input name="image" class="form-control filestyle {{ $errors->has('image') ? 'is-invalid' : '' }}" type="file" id="image" data-text="Vybrať súbor" data-btnClass="btn-primary border-left-no-radius">
                                            @include('admin._partials._errors', ['column' => 'image'])
                                        </div>

                                    </div>
                                </div>

                                @include('admin._partials._buttons')
                            </form>

                            <div class="border-top mb-3"></div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <h5 class="card-title mb-0">Obrázok</h5>
                                </div>
                            </div>

                            <div class="row">
                                @foreach(range(1, 8) as $i)
                                    <div class="col-sm-3">
                                        @include('admin._partials._image', [
                                            'thumb' => asset('img/image-placeholder.jpg'),
                                            'image' => asset('img/image-placeholder.jpg'),
                                            'delete' => 'javascript:void(0)',
                                            'entity' => 'image-placeholder.jpg',
                                        ])
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
