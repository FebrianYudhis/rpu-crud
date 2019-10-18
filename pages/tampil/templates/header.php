<?php
session_start();
$base = "http://killersvteam.com/";
if (!isset($_SESSION['username']) and !isset($_SESSION['status'])) {
    echo "<script>alert('Harap Login Dulu !');window.location='" . $base . "crud/index.php';</script>";
} else if (isset($_SESSION['username']) and isset($_SESSION['status']) and $_SESSION['hak'] != "Admin") {
    echo "<script>alert('Anda Bukan Admin !');window.location='" . $base . "crud/index.php';</script>";
}
include('../../php/koneksi.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $data['judul']; ?></title>
    <link rel="shortcut icon" href="../../assets/img/logo/favicon.jpg">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= $base; ?>crud/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= $base; ?>crud/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/DataTables/datatables.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-sign"></i>
                        <span class="badge badge-warning navbar-badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Tampilkan Data</span>
                        <div class="dropdown-divider"></div>
                        <a href="<?= $base; ?>crud/pages/tampil/siswa.php" class="dropdown-item">
                            <i class="fas fa-fw fa-child mr-2"></i> Data Siswa
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= $base; ?>crud/pages/tampil/nilai.php" class="dropdown-item">
                            <i class="fas fa-fw fa-list-ol mr-2"></i> Data Nilai
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= $base; ?>crud/pages/tampil/guru.php" class="dropdown-item">
                            <i class="fas fa-fw fa-chalkboard-teacher mr-2"></i> Data Guru
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= $base; ?>crud/pages/tampil/mapel.php" class="dropdown-item">
                            <i class="fas fa-fw fa-book mr-2"></i> Data Mapel
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= $base; ?>crud/pages/tampil/jurusan.php" class="dropdown-item">
                            <i class="fas fa-fw fa-code-branch mr-2"></i> Data Jurusan
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/avatar.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Febrian Yudhistira</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tampilan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../tampil/utama.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Utama</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Tambah Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../formulir/siswa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../formulir/nilai.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Penilaian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../formulir/guru.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../formulir/mapel.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Mapel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../formulir/jurusan.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Jurusan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">Opsi</li>
                        <li class="nav-item">
                            <a href="../../php/logout.php" class="nav-link">
                                <i class=" nav-icon far fa-circle text-danger"></i>
                                <p class="text">Keluar</p>
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
                            <h1 class="m-0 text-dark"><?= $data['judul']; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Data</a></li>
                                <li class="breadcrumb-item active"><?= $data['judul']; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->