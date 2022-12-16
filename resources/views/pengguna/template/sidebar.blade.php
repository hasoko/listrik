<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('/lte') }}/dist/img/logotmiilistrik.png" alt="logotmiilistrik" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/admin') }}" class="brand-link">
                <img src="{{ asset('/lte') }}/dist/img/logotmiilistrik.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Listrik TMII</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/lte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Gigih Hasoko W.</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">Administrator</li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin') }}/kwhmeter" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    KWH Meter
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin') }}/datapelanggan" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Data Pelanggan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin') }}/dataunit" class="nav-link">
                                <i class="nav-icon fas fa-bolt"></i>
                                <p>Data Unit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin') }}/datatarif" class="nav-link">
                                <i class="nav-icon fas fa-coins"></i>
                                <p>Data Tarif</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin') }}/informasi" class="nav-link">
                                <i class="nav-icon fas fa-comment"></i>
                                <p>Informasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin') }}/transaksipembayaran" class="nav-link">
                                <i class="nav-icon fas fa-money-bill"></i>
                                <p>Transaksi Pembayaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin') }}/laporan" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>


                        <li class="nav-header">Pengguna</li>
                        <li class="nav-item">
                            <a href="{{ asset('/pengguna') }}/tagihan" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>
                                    Tagihan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/pengguna') }}/profil" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ asset('/keluar') }}" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Keluar
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $halaman['title'] ?? "Halaman"}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->