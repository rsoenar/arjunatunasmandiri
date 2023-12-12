<div class="sidebar ">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Dedi Hadian</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2 sidebar-dark-teal">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/dashboard" wire:navigate
                    class="nav-link {{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-header">MASTER DATA</li>
            <li class="nav-item {{ Request::segment(1) === 'master' ? 'menu-is-opening menu-open active' : null }}">
                <a href="#"
                    class="nav-link {{ Request::segment(1) === 'master' ? 'menu-is-opening menu-open active' : null }}">
                    <i class="nav-icon fa fa-database"></i>
                    <p>
                        Kelola Data Master
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/master/kendaraan') }}" wire:navigate
                            class="nav-link {{ Request::segment(2) === 'kendaraan' ? 'active' : null }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Master Kendaraan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/master/supir') }}" wire:navigate
                            class="nav-link {{ Request::segment(2) === 'supir' ? 'active' : null }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Master Supir</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/master/pelanggan') }}" wire:navigate
                            class="nav-link {{ Request::segment(2) === 'pelanggan' ? 'active' : null }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Master Pelanggan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('master-biaya') }}" wire:navigate
                            class="nav-link {{ Request::segment(2) === 'master-biaya' ? 'active' : null }}"
                            wire:navigate>
                            <i class="far fa-circle nav-icon"></i>
                            <p>Master Biaya</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('master-order') }}" wire:navigate
                            class="nav-link {{ Request::segment(2) === 'master-order' ? 'active' : null }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Master Order</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">TRANSAKSI</li>
            <li class="nav-item {{ Request::segment(1) === 'transaksi' ? 'menu-is-opening menu-open active' : null }}">
                <a href="#"
                    class="nav-link {{ Request::segment(1) === 'transaksi' ? 'menu-is-opening menu-open active' : null }}">
                    <i class="nav-icon fa fa-credit-card"></i>
                    <p>
                        Transaksi
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('trans-service') }}"
                            class="nav-link {{ Request::segment(2) === 'trans-service' ? 'active' : null }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Service</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Biaya Pajak (STNK)</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Biaya Operasional</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Order</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-header">REPORTING</li>
            <li class="nav-item">
                <a href="../calendar.html" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Calendar
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../gallery.html" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Gallery
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../kanban.html" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Kanban Board
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                        Mailbox
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../mailbox/mailbox.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inbox</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../mailbox/compose.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Compose</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../mailbox/read-mail.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Read</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
