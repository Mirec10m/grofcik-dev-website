@extends('layout.admin')

@section('page-title')
    Nastavenia
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            @include('admin._partials._breadcrumbs', [ 'title' => 'Nastavenia', 'crumbs' => [
                'Úvod' => route('dashboard.index'),
            ]])

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <a href="{{ asset( $user->profile_image ? $user->profile_image->get_type('thumb') : 'img/user-image.png' ) }}" class="image-popup" data-gallery="user-profile-photo">
                                        <img src="{{ asset( $user->profile_image ? $user->profile_image->get_type('thumb') : 'img/user-image.png' ) }}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                    </a>
                                    <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <form id="profile-img-file-form" action="{{ route('settings.image') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input id="profile-img-file-input" name="image" type="file" class="profile-img-file-input">
                                        </form>
                                        <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                <i class="ri-camera-fill"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <h5 class="fs-16 mb-1">{{ $user->full_name }}</h5>
                                <p class="text-muted mb-0">{{ $user->position ?? 'Zamestnanec' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-9">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#profile" role="tab">
                                        <i class="fas fa-home"></i> Profil
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#password" role="tab">
                                        <i class="far fa-user"></i> Zmena hesla
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">
                                        <i class="far fa-home"></i> Nastavenia
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body p-4">
                            <div class="tab-content border-0">
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <form action="{{ route('settings.profile') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        @include('admin.settings._partials._form')

                                        @include('admin._partials._buttons')
                                    </form>
                                </div>

                                <div class="tab-pane" id="password" role="tabpanel">
                                    <form action="{{ route('settings.password') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        @include('admin.settings._partials._form_password')

                                        @include('admin._partials._buttons')
                                    </form>
                                </div>

                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <form action="{{ route('settings.settings') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        @include('admin.settings._partials._form_settings')

                                        @include('admin._partials._buttons')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
