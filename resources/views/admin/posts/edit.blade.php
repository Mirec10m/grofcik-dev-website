@extends('layout.admin')

@section('page-title')
    Články
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Článok - ' . str($post->name_sk)->limit(30), 'crumbs' => [
                'Úvod' => route('dashboard.index'),
                'Články' => route('posts.index'),
            ]])

            <div class="row">
                <div class="col-lg-12">
                    @include('admin.posts._partials._tabs')

                    <div class="card">
                        <div class="card-body">
                            <form id="posts-edit-form" target="_self" action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="preview" value="">

                                @include('admin.posts._partials._form', [ 'card_title' => "Editovať článok" ])

                                @include('admin._partials._buttons')
                            </form>

                            <div id="image-view" class="image-view">
                                <div class="border-top mb-3"></div>

                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <h5 class="card-title mb-0">Obrázok</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    @if($profile_image = $post->profile_image)
                                        <div class="col-sm-3">
                                            @include('admin._partials._image', [
                                                'thumb' => asset($profile_image->get_type('thumb')),
                                                'image' => asset($profile_image->get_type('image')),
                                                'delete' => route('images.delete', $profile_image),
                                                'entity' => 'Profilový obrázok',
                                                'gallery' => 'profile',
                                            ])
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div id="seo-view" class="image-view">
                                <div class="border-top mb-3"></div>

                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <h5 class="card-title mb-0">SEO obrázok</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    @if($post->seo && $seo_image = $post->seo->images->first())
                                        <div class="col-sm-3">
                                            @include('admin._partials._image', [
                                                'thumb' => asset($seo_image->get_type('thumb')),
                                                'image' => asset($seo_image->get_type('image')),
                                                'delete' => route('images.delete', $seo_image),
                                                'entity' => 'SEO obrázok',
                                                'gallery' => 'seo',
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
