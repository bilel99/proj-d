<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('front.homepage') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>DDG</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administration
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
           aria-controls="collapseOne">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administration</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">#admin</h6>
                <a class="collapse-item" href="{{ route('admin.users.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Utilisateurs</span>
                </a>

                <a class="collapse-item" href="{{ route('admin.doctors.index') }}">
                    <i class="fas fa-user-md"></i>
                    <span>médecins</span>
                </a>

                <a class="collapse-item" href="{{ route('admin.contacts.index') }}">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>demande de contact</span>
                </a>

                <a class="collapse-item" href="{{ route('admin.horaires.index') }}">
                    <i class="fas fa-clock"></i>
                    <span>Nos horaires</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pages
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">#Content</h6>
                <a class="collapse-item" href="{{ route('admin.pages.index') }}">
                    <i class="fas fa-file-alt"></i>
                    <span>Pages</span>
                </a>

                <a class="collapse-item" href="{{ route('admin.services.index') }}">
                    <i class="fas fa-concierge-bell"></i>
                    <span>Services</span>
                </a>

                <a class="collapse-item" href="{{ route('admin.contacts.index') }}">
                    <i class="fas fa-info"></i>
                    <span>Informations</span>
                </a>

                <a class="collapse-item" href="{{ route('admin.horaires.index') }}">
                    <i class="fas fa-hospital"></i>
                    <span>Maisons médicales</span>
                </a>

                <a class="collapse-item" href="{{ route('admin.alerts.index') }}">
                    <i class="fas fa-exclamation"></i>
                    <span>Les alerts</span>
                </a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->