<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        </<b>
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    Kevin Anggora
                </p>
                <span class="label label-warning">
                    Administrator
                </span>
            </div>
        </div>
        </br>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <!-- Level jika admin  -->

                <li class="treeview">
                    <a href="/dashboard">
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

                        <li>
                            <a href="/data-buku">
                                <i class="fa fa-book"></i>Data Buku</a>
                        </li>
                        <li>
                            <a href="data-agt">
                                <i class="fa fa-users"></i>Data Anggota</a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="data-sirkul">
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

                        <li>
                            <a href="log-pinjam">
                                <i class="fa fa-arrow-circle-o-down"></i>Peminjaman</a>
                        </li>
                        <li>
                            <a href="log-kembali">
                                <i class="fa fa-arrow-circle-o-up"></i>Pengembalian</a>
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
                        <li>
                            <a href="laporan-sirkulasi">
                                <i class="fa fa-file"></i>Laporan Sirkulasi</a>
                        </li>
                    </ul>
                </li>

                <li class="header">SETTING</li>

                <li class="treeview">
                    <a href="data-pengguna">
                        <i class="fa fa-user"></i>
                        <span>Pengguna Sistem</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

            <li>
                <a href="logout.php" onclick="return confirm('Anda yakin keluar dari aplikasi ?')">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
