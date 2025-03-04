<aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/logoo.jpeg')}}" alt="Logo"
            class="brand-image img-circle elevation-3 bg-light" style="opacity: .8">
        <span class="brand-text font-weight-light"><h4>SDS FILADELFIA <BR>TARUTUNG</h4></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <img src="{{ asset('img/orang.jpg') }}" alt=""
                    class="img-circle elevation-2">
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent" data-widget="treeview"
                role="menu" data-accordion="false">
                <li class="nav-header">MENU</li>

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            DASHBOARD
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is(['role*', 'permission*']) ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is(['role*', 'permission*']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            KONFIGURASI
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="{{ request()->is(['role*']) ? 'display: block' : 'none' }}">
                        <li class="nav-item">
                            <a href="{{ route('beranda.index') }}"
                                class="nav-link {{ request()->is(['role*']) ? 'active' : '' }}">
                                <i class="ion ion-home"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('berita.index') }}"
                                class="nav-link }}">
                                <i class="ion ion-earth""></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dataalumni.index') }}"
                                class="nav-link {{ request()->is(['permission*']) ? 'active' : '' }}">
                                <i class="ion ion-person-add"></i>
                                <p>Data Alumni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('datasekolah.index') }}"
                                class="nav-link {{ request()->is(['role*']) ? 'active' : '' }}">
                                <i class="ion ion-pie-graph"></i>
                                <p>Data Sekolah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('fasilitas.index') }}"
                                class="nav-link {{ request()->is('permission*') ? 'active' : '' }}">
                                <i class="ion ion-gear-b"></i>
                                <p>Fasilitas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="document.querySelector('#form-logout').submit()">
                        <i class="fas fa-sign-out-alt"></i> KELUAR
                    </a>

                    <form action="{{ route('logout') }}" method="post" id="form-logout">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
