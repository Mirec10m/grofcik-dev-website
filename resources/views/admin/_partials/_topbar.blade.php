<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset('img/user-image.png') }}" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ auth()->user()->name . " " . auth()->user()->surname }}</span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{ auth()->user()->admin ? 'Administrátor' : 'Používateľ' }}</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <h6 class="dropdown-header">Vitajte {{ auth()->user()->name }}!</h6>
                        <a class="dropdown-item" href="{{ route('settings.edit') }}">
                            <i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle">Profil</span>
                        </a>
                        <a class="dropdown-item" href="{{ route('settings.password') }}">
                            <i class="mdi mdi-settings text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle">Zmena hesla</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-item text-danger">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf

                                <button type="submit" class="logout-button">
                                    <i class="mdi mdi-power text-primary"></i>
                                    Odhlásiť sa
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
