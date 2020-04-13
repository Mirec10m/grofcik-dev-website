<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Webstránka</li>
                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Úvod</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.overview') }}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Prehľad</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span>Položky<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">
                                Zoznam položiek
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span>Položky<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">
                                Zoznam položiek
                            </a>
                        </li>
                    </ul>
                </li>

                @if(auth()->user()->super_admin)
                <li class="menu-title">Super Admin</li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span>Položky<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">
                                Zoznam položiek
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

            </ul>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
