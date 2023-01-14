<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="{{ route('dashboard.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('img/admin-logo-mark.svg') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/admin-logo.svg') }}" alt="" height="40">
            </span>
        </a>
        <a href="{{ route('dashboard.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('img/admin-logo-mark-white.png') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/admin-logo-white.png') }}" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover" data-url="{{ route('settings.menu') }}">
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
                    <a class="nav-link menu-link" href="{{ route('dashboard.index') }}">
                        <i class="mdi mdi-home"></i> <span>Úvod</span>
                    </a>
                </li>

                @if(auth()->user()->super_admin)
                    <li class="menu-title"><i class="ri-more-fill"></i> <span>Super Admin</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebar-examples" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="mdi mdi-format-list-bulleted"></i> <span>Examples</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.examples.index') }}" class="nav-link"> Sekcia </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.pages.table') }}" class="nav-link"> Tabuľka </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.pages.form') }}" class="nav-link"> Formulár </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.pages.invoice') }}" class="nav-link" target="_blank"> Faktúra </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.orders.index') }}" class="nav-link"> Objednávky </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebar-ui" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="mdi mdi-format-list-bulleted"></i> <span>UI</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebar-ui">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.pages.components') }}" class="nav-link"> Komponenty </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.pages.icons') }}" class="nav-link"> Ikony </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('superadmin.pages.overview') }}">
                            <i class="mdi mdi-view-dashboard"></i> <span>Prehľad</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebar-superadmin" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                            <i class="mdi mdi-table"></i> <span>Databáza</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebar-superadmin">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <form action="{{ route('superadmin.migrate') }}" method="post">
                                        <button class="nav-link border-0 bg-transparent alert-confirm" type="button" data-action="{{ 'Spustiť migrácie' }}">
                                            Spustiť migrácie
                                        </button>
                                    </form>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('superadmin.seed') }}" method="post">
                                        <button class="nav-link border-0 bg-transparent alert-confirm" type="button" data-action="{{ 'Spustiť seedy' }}">
                                            Spustiť seedy
                                        </button>
                                    </form>
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
