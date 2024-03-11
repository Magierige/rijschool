<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Request::is('home')) active @endif">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Lessen -->
    <li class="nav-item @if(Request::is('lessons')) active @endif">
        <a class="nav-link" href="/construction">
            <i class="fas fa-fw fa-solid fa-person-chalkboard"></i>
            <span>Lessons</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item @if(Request::is('tables')) active @endif">
        <a class="nav-link" href="/tables">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

     <!-- Nav Item - Forms Collapse Menu -->
     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-regular fa-rectangle-list"></i>
                    <span>Forms</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Forms:</h6>
                        <a class="collapse-item" href="/construction">Forms</a>
                        <a class="collapse-item" href="/construction">Form fields</a>
                        <a class="collapse-item" href="/construction">Form submissions</a>
                    </div>
                </div>
            </li>

    <!-- Nav Item - Users -->
    <li class="nav-item @if(Request::is('users')) active @endif">
        <a class="nav-link" href="/construction">
            <i class="fa-solid fa-users"></i>
            <span>Users</span></a>
    </li>

    <!-- Nav Item - vehicles -->
    <li class="nav-item @if(Request::is('vehicles')) active @endif">
        <a class="nav-link" href="/construction">
            <i class="fa-solid fa-car"></i>
            <span>vehicles</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->