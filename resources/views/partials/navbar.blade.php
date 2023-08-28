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

                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        <span class="badge rounded-pill bg-primary">1</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/dashboard" data-key="t-ecommerce">Admin Dashboard</a></li>
                        {{-- <li><a href="dashboard-sales.html" data-key="t-sales">Sales</a></li> --}}
                    </ul>
                </li>

                <li class="menu-title" data-key="t-applications">Setup</li>



                <li>
                    <a href="/vendor-types">
                        <i class="mdi mdi-view-week icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Types</span>
                    </a>
                </li>
                <li>
                    <a href="/status">
                        <i class="mdi mdi-list-status icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Status</span>
                    </a>
                </li>
                <li>
                    <a href="/priority">
                        <i class="mdi mdi-priority-high icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Priority</span>
                    </a>
                </li>
                <li>
                    <a href="/impact">
                        <i class="mdi mdi-shuriken icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Impact</span>
                    </a>
                </li>
                <li>
                    <a href="/bu">
                        <i class="mdi mdi-hexagon-multiple icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Business Unit</span>
                    </a>
                </li>
                <li>
                    <a href="/groups">
                        <i class="mdi mdi-account-group-outline icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Group</span>
                    </a>
                </li>
                <li>
                    <a href="/vendor">
                        <i class="fas fa-cubes icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Vendors</span>
                    </a>
                </li>
                <li>
                    <a href="/Subscription">
                        <i class="mdi mdi-package-variant icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Subscription Packages</span>
                    </a>
                </li>
                <li>
                    <a href="/Tickets">
                        <i class="mdi mdi-ticket-confirmation icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Tickets</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="/new">
                        <i class="mdi mdi-ticket-confirmation icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">new</span>
                    </a>
                </li> --}}
                
                
                <li>
                    <a href="/domain">
                        <i class="mdi mdi-chart-bubble icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Domain</span>
                    </a>
                </li>
                <li>
                    <a href="/Company">
                        <i class="bx bxs-droplet icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Company</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="mdi mdi-account-child-circle nav-icon"></i>
                        <span class="menu-item" data-key="t-ecommerce">User Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/Permission"data-key="t-calendar">Permission</a></li>
                        <li><a href="/role" data-key="t-calendar">Role</a></li>
                        <li><a href="/user" data-key="t-calendar">User</a></li>
                        <li><a href="/designation" data-key="t-calendar">Designation</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
