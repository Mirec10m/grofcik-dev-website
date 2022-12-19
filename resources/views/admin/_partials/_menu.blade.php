<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="{{ route('dashboard.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('img/admin-logo-white.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/admin-logo-white.png') }}" alt="" height="17">
            </span>
        </a>
        <a href="{{ route('dashboard.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('img/admin-logo-white.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/admin-logo-white.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Webstránka</span></li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">
                        <i class="mdi mdi-home"></i> <span>Úvod</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.overview') }}">
                        <i class="mdi mdi-view-dashboard"></i> <span>Prehľad</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebar-examples" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="mdi mdi-format-list-bulleted"></i> <span>Examples</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('examples.index') }}" class="nav-link"> Zoznam položiek </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebar-items" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="mdi mdi-format-list-bulleted"></i> <span>Položky</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebar-items">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link"> Zoznam položiek </a>
                            </li>
                        </ul>
                    </div>
                </li>

                @if(auth()->user()->super_admin)
                    <li class="menu-title"><i class="ri-more-fill"></i> <span>Super Admin</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebar-superadmin" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="mdi mdi-table"></i> <span>Databáza</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebar-superadmin">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"> Spustiť migrácie </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"> Spustiť seedy </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>
