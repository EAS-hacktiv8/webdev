<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hacktiv8 Commerce</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Produk
    </div>

    <!-- Nav Item - Kategori -->
    <li class="nav-item {{ Route::currentRouteName() == 'category.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('category.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kategori</span></a>
    </li>

    <!-- Nav Item - Produk -->
    <li class="nav-item {{ Route::currentRouteName() == 'product.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('product.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Produk</span></a>
    </li>

    <!-- Nav Item - Pesanan -->
    <li class="nav-item" {{ Route::currentRouteName() == 'order.index' ? 'active' : '' }}>
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pesanan</span></a>
    </li>

    <!-- Nav Item - Collapse Menu - Laporan -->
    <li class="nav-item {{ Route::currentRouteName() == 'order.invoice' ? 'active' : '' }}">
        <a class="nav-link {{ Route::currentRouteName() == 'order.invoice' ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Route::currentRouteName() == 'order.invoice' ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Invoice:</h6>
                <button class="collapse-item btn btn-link" onclick="alert('Don\'t know what to implement here... Requirements aren\'t clear enough. Sorry')">Laporan</button>
            </div>
        </div>
    </li>

    <!-- Nav Item - Collapse Menu - Pengaturan -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <a class="collapse-item" href="#">Some settings</a>
                <a class="collapse-item" href="#">Another settings</a>
                <a class="collapse-item" href="#">Interesting settings</a>
                <a class="collapse-item" href="#">Yet Another Settings</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
