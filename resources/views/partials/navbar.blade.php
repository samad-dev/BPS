<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/dashboard" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="28">
            </span>
        </a>

        <a href="/dashboard" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>


                <li class="menu-title" data-key="t-applications">Setup</li>

                <li>
                    <a href="/vendor-types">
                        <i class="mdi mdi-view-week icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Dashboard</span>
                    </a>
                </li>


                <li class="">
                    <a href="javascript: void(0);" class="has-arrow mm-collapsed" aria-expanded="false">
                        <i class="bx bx-share-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-multi-level">Modules</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="true" style="">
                        <!-- <li class="disabled"><a href="/Permission" data-key="t-disabled-item">Development permit</a>
                        </li> -->

                        <!-- <li class=""><a href="javascript: void(0);" class="has-arrow mm-collapsed"
                                data-key="t-level-1.2" aria-expanded="false">Development permit</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true" style="">
                                <li><a href="/permit_status" data-key="t-level-2.1">Permit Status</a></li>
                                <li><a href="/permit_type" data-key="t-level-2.2">Permit Type</a></li>
                                <li><a href="/development_permits" data-key="t-level-2.2">Building Permits</a></li>

                            </ul>
                        </li> -->
                        <li class=""><a href="javascript: void(0);" class="has-arrow mm-collapsed"
                                data-key="t-level-1.2" aria-expanded="false">Permit</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="true" style="">
                                <li><a href="/permit_status" data-key="t-level-2.1">Status</a></li>
                                <li><a href="/permit_type" data-key="t-level-2.2">Type</a></li>
                                <li><a href="/building_permits" data-key="t-level-2.2">Permits</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript: void(0);" class="has-arrow mm-collapsed" aria-expanded="false">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-contacts">Teams</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="">
                        <li><a href="/team" data-key="t-user-grid">Teams</a></li>
                        <li><a href="/assign_user_team" data-key="t-user-grid">Assign users to Teams</a></li>


                    </ul>
                </li>
                <li class="">
                    <a href="javascript: void(0);" class="has-arrow mm-collapsed" aria-expanded="false">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-contacts">Inspection</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="">

                        <li><a href="/assign_team_user" data-key="t-user-grid">Assign users or Teams to Inspection</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="/project">
                        <i class="mdi mdi-list-status icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Properties</span>
                    </a>
                </li>
                <li>
                    <a href="/status">
                        <i class="mdi mdi-list-status icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Map</span>
                    </a>
                </li>
                <li>
                    <a href="/priority">
                        <i class="mdi mdi-priority-high icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Task</span>
                    </a>
                </li>
                <li>
                    <a href="/impact">
                        <i class="mdi mdi-shuriken icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Inspection Teams</span>
                    </a>
                </li>
                <li>
                    <a href="/bu">
                        <i class="mdi mdi-hexagon-multiple icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Permission</span>
                    </a>
                </li>
                <li>
                    <a href="/groups">
                        <i class="mdi mdi-account-group-outline icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Roles</span>
                    </a>
                </li>
                <li>
                    <a href="/user">
                        <i class="fas fa-cubes icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Users</span>
                    </a>
                </li>





            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>