<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIKUnjung</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(1) === null ? 'active' : null }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->

    <hr class="sidebar-divider mb-1">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(1) === 'user' ? 'active' : null }}">
        <a class="nav-link" href="/user">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider  mb-1">
    <li class="nav-item {{ Request::segment(1) === 'peta' ? 'active' : null }}">
        <a class="nav-link" href="/peta">
            <i class="fas fa-fw fa-map-marked-alt"></i>
            <span>Map</span></a>
    </li>
    {{-- <!-- Heading -->
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::segment(1) === 'settings' ? 'active' : null }}">
        <a class="nav-link collapsed"href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Request::segment(1) === 'settings' ? 'show' : null }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Setting Data</h6>
                <a class="collapse-item {{ Request::segment(2) === 'pendidikan' ? 'active' : null }}"
                    href="/settings/pendidikan">Pendidikan</a>
                <a class="collapse-item {{ Request::segment(2) === 'jabatan' ? 'active' : null }}"
                    href="/settings/jabatan">Jabatan</a>
                <a class="collapse-item {{ Request::segment(2) === 'sub-jabatan' ? 'active' : null }}"
                    href="/settings/sub-jabatan">Sub Jabatan</a>
            </div>
        </div>
    </li> --}}

    {{-- <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
