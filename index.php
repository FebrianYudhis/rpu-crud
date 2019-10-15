<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<head>
	<title>Sistem Informasi Berbasis Web</title>
	<meta charset="UTF-8">
	<meta name="description" content="Arcade - Architecture Template">
	<meta name="keywords" content="arcade, architecture, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/animate.css" />
	<link rel="stylesheet" href="assets/css/owl.carousel.css" />
	<link rel="stylesheet" href="assets/css/style.css" />


</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-area">
		<a href="#" class="logo-area">
			<img src="assets/img/logo/logo.jpg" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="nav-menu">
			<ul>
				<li class="active"><a href="#beranda">Beranda</a></li>
				<li><a href="#tujuan">Tujuan</a></li>
				<li><a href="#jurusan">Jurusan</a></li>
				<li><a href="#tentang">Tentang</a></li>
				<li><a href="#data">Data-Data</a></li>
				<li><a href="#partner">Partner Website</a></li>
				<?php if (isset($_SESSION['username']) and isset($_SESSION['status'])) {
					echo "<li><a href='php/logout.php'>Keluar</a></li>";
				} ?>
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
		<!-- hero slider area -->
		<div class="hero-slider">
			<div class="hero-slide-item set-bg" data-setbg="assets/img/logo/bg.jpg">
				<div class="slide-inner">
					<div class="slide-content">
						<h2>Sistem Informasi<br> Sekolah</h2>
					</div>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="assets/img/logo/bg2.jpg">
				<div class="slide-inner">
					<div class="slide-content">
						<h2>Berbasiskan<br> Website</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="slide-num-holder" id="snh-1"></div>
		<div class="hero-right-text">Welcome</div>
	</section>
	<!-- Hero section end -->


	<!-- Intro section start -->
	<section class="intro-section pt100 pb50" id="tujuan">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 intro-text mb-5 mb-lg-0">
					<h2 class="sp-title">Sistem Informasi<span>Sekolah</span></h2>
					<p>Website ini disusun berdasarkan tugas yang di berikan sekolah.<br>Website ini berisikan sample
						data dari beberapa data yang sudah dibuat.<br>Guna sebagai bentuk praktek dari projek apa saja
						yang sudah di lakukan</p>
				</div>
				<div class="col-lg-5 pt-4">
					<img src="assets/img/logo/bg3.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Service section start -->
	<section class="service-section spad" id="jurusan">
		<div class="container">
			<div class="section-title">
				<h2>Jurusan</h2>
			</div>
			<div class="row">
				<?php
				include('php/koneksi.php');
				$jurusan = mysqli_query($koneksi, "SELECT * FROM JURUSAN");
				foreach ($jurusan as $j) { ?>
					<div class="col-lg-4 col-md-6">
						<div class="service-box">
							<div class="sb-icon">
								<div class="sb-img-icon">
									<i class="<?= $j['icon']; ?>"></i>
								</div>
							</div>
							<h3><?= $j['nama_jurusan']; ?></h3>
							<p><?= $j['deskripsi']; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- Service section end -->



	<!-- CTA section start -->
	<section class="cta-section pt100 pb50" id="tentang">
		<div class="cta-image-box"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
					<h2 class="sp-title"><span>Tentang Website</span></h2>
					<p>Landing page ini menggunakan template yang dimana di distribusi dengan copyright.<br>Adapun berbagai unsur seperti watermark akan tetap di tampilkan.
						<br>Data siswa,guru,maupun jurusan disini bersifat dinamis,yang dimana kalian bisa mengubahnya dengan login halaman admin.<br><br>Jika kalian berkenan cuman sekadar untuk melihat data-data guru/siswa di bawah ini,kalian bisa login dengan <i><b> username: user</b></i> dan <i><b>password : user</b></i>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- CTA section end -->



	<!-- Projects section start -->
	<div class="projects-section" id="data">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="section-title mt-5">
						<h1>Data</h1>
					</div>
				</div>
				<div class="col-lg-9 mt-5">
					<ul class="projects-filter-nav">
						<li class="btn-filter" data-filter="*">Semua</li>
						<li class="btn-filter" data-filter=".siswa">Siswa</li>
						<li class="btn-filter" data-filter=".guru">Guru</li>
						<li class="btn-filter" data-filter=".admin">Admin</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="projects-carousel" class="projects-slider">
			<div class="single-project set-bg siswa" data-setbg="assets/img/logo/slide2.jpg">
				<div class="project-content">
					<h2>Data <br> Siswa</h2>
					<a href="pages/login.php?menu=siswa" class="seemore">Lihat</a>
				</div>
			</div>
			<div class="single-project set-bg guru" data-setbg="assets/img/logo/slide3.jpg">
				<div class="project-content">
					<h2>Data <br> Guru</h2>
					<a href="pages/login.php?menu=guru" class="seemore">Lihat</a>
				</div>
			</div>
			<div class="single-project set-bg admin" data-setbg="assets/img/logo/admin.jpg">
				<div class="project-content">
					<h2>Kelola Sebagai <br> Admin</h2>
					<a href="pages/login.php?menu=admin" class="seemore">Lihat</a>
				</div>
			</div>
		</div>
		<!-- Projects section end -->


		<!-- Clients section start -->
		<div class="client-section span" id="partner">
			<div class="container">
				<div class="h2 mb-5">Partner With :</div>
				<div id="client-carousel" class="client-slider">
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/logo/pn.png" alt="">Putra Nugraha
						</a>
					</div>
				</div>
			</div>
			<!-- Clients section end -->


			<!-- Footer section start -->
			<footer class="footer-section mt-5">
				<div class="footer-social">
					<div class="social-links">
						<a href="https://linkedin.com/in/febrian-yudhistira"><i class="fa fa-linkedin"></i></a>
						<a href="https://www.instagram.com/febrian_yudhis/"><i class="fa fa-instagram"></i></a>
						<a href="https://www.facebook.com/febrian.yudhis"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/FebrianYudhis71"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				<div class="copyright">Copyright &copy; <script>
						document.write(new Date().getFullYear());
					</script> All rights reserved. <br>This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</footer>
			<!-- Footer section end -->




			<!--====== Javascripts & Jquery ======-->
			<script src="assets/js/jquery-2.1.4.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/isotope.pkgd.min.js"></script>
			<script src="assets/js/owl.carousel.min.js"></script>
			<script src="assets/js/jquery.owl-filter.js"></script>
			<script src="assets/js/magnific-popup.min.js"></script>
			<script src="assets/js/circle-progress.min.js"></script>
			<script src="assets/js/main.js"></script>
</body>

</html>