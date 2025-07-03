<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        </<b>
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    {{ Auth::user()->name ?? Auth::user()->username ?? 'Guest' }}
                </p>
                <span class="label label-warning">
                    {{ Auth::user()->role ?? 'User' }}
                </span>
            </div>
        </div>
        </br>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <!-- Level jika admin  -->

                <li class="treeview{{ request()->is('dashboard-admin') ? ' active' : '' }}">
                    <a href="{{ url('/dashboard-admin') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span>Kelola Data</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">

                        <li class="treeview">
                            <a href="{{ url('/data-buku') }}">
                                <i class="fa fa-book"></i> <span>Data Buku</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{ url('/data-agt') }}">
                                <i class="fa fa-users"></i> <span>Data Anggota</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="{{ url('/data-sirkul') }}">
                        <i class="fa fa-refresh"></i>
                        <span>Sirkulasi</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>Log Data</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">

                        <li class="treeview">
                            <a href="{{ url('/log-pinjam') }}">
                                <i class="fa fa-arrow-circle-o-down"></i> <span>Peminjaman</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{ url('/log-kembali') }}">
                                <i class="fa fa-arrow-circle-o-up"></i> <span>Pengembalian</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-print"></i>
                        <span>Laporan</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="{{ url('/laporan-sirkulasi') }}">
                                <i class="fa fa-file"></i> <span>Laporan Sirkulasi</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="header">SETTING</li>

                <li class="treeview">
                    <a href="{{ url('/data-pengguna') }}">
                        <i class="fa fa-user"></i>
                        <span>Pengguna Sistem</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

            <li>
                <a href="/logout" onclick="return confirm('Anda yakin keluar dari aplikasi ?')">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
