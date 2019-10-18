<?php
session_start();
$base = "http://killersvteam.com/";
if (!isset($_SESSION['username']) and !isset($_SESSION['status'])) {
    echo "<script>alert('Harap Login Dulu !');window.location='" . $base . "crud/index.php';</script>";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $data['judul']; ?></title>
    <link rel="shortcut icon" href="../../../assets/img/logo/favicon.jpg">
    <meta charset="UTF-8">
    <meta name="description" content="Arcade - Architecture Template">
    <meta name="keywords" content="arcade, architecture, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="../../../assets/css/style.css" />


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section start -->
    <header class="header-area">
        <a href="#" class="logo-area">
            <img src="../../../assets/img/logo/logo.jpg" alt="">
        </a>
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="../../../index.php">Beranda</a></li>
                <li><a href="../../../php/logout.php">Keluar</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header section end -->


    <!-- Hero section start -->
    <section class="hero-section">
        <!-- left social link ber -->
        <div class="left-bar">
            <div class="left-bar-content">
                <div class="social-links">
                    <a href="https://linkedin.com/in/febrian-yudhistira"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/febrian_yudhis/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/febrian.yudhis"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/FebrianYudhis71"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="hero-slider">
            <div class="hero-slide-item set-bg" data-setbg="../../../assets/img/logo/bg.jpg">
                <div class="slide-inner">
                    <div class="slide-content">
                        <h2>Sistem Informasi<br> Sekolah</h2>
                    </div>
                </div>
            </div>
            <div class="hero-slide-item set-bg" data-setbg="../../../assets/img/logo/bg2.jpg">
                <div class="slide-inner">
                    <div class="slide-content">
                        <h2><?= $data['judul']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>