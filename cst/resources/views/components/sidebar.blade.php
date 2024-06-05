<!-- resources/views/components/sidebar.blade.php -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Gestión WWW<sup>1.0</sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ABMs
    </div>
    <!-- Nav Item - Usuarios -->
    <li class="nav-item {{ request()->is('usuarios*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuarios</span>
        </a>
        <div id="collapseUsers" class="collapse {{ request()->is('usuarios*') ? 'show' : '' }}" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opciones:</h6>
                @foreach($userTypes as $userType)
                <a class="collapse-item {{ request()->is('usuarios/'.$userType->id) ? 'active' : '' }}" href="{{ route('usuarios.index', $userType->id) }}">{{ $userType->name }}</a>
                @endforeach
                <a class="collapse-item {{ request()->is('usuario/create') ? 'active' : '' }}" href="{{ route('usuarios.create') }}">Crear</a>
            </div>
        </div>
    </li>

    <!-- Add more sections here as needed -->

    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>