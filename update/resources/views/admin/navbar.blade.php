<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIMI Mental Health</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-md"></i>
            <span>Nama</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/profil">
                    <i class="fas fa-stethoscope"></i> Profile</a>
                <a class="collapse-item" href="/logout">
                    <i class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('penyakit') ? 'active' : '' }}">
        <a class="nav-link" href="/penyakit">
            <i class="fas fa-columns"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('pasien') ? 'active' : '' }}">
        <a class="nav-link" href="/pasien">
            <i class="fas fa-user-injured"></i>
            <span>Pasien</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-head-side-virus"></i>
            <span>Penyakit</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            @foreach ($navbarPenyakit as $item)
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="/detail?id={{ $item->id }}"
                        style="white-space: pre-line;">{{ $item->penyakit }}</a>
                </div>
            @endforeach
        </div>
    </li>

    <li class="nav-item {{ request()->is('gejala') ? 'active' : '' }}">
        <a class="nav-link" href="/gejala">
            <i class="fas fa-viruses"></i>
            <span>Gejala</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
