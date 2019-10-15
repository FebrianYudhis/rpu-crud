<?php $data['judul'] = "Halaman Utama";
include('templates/header.php'); ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <section class="col-lg-12 connectedSortable">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px;">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../dist/img/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../../dist/img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Sebelum/span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Sesudah</span>
          </a>
        </div>
        <div class="h1 mt-5 mb-5" style="text-align:center;"> Selamat Datang Di Halaman Admin ! </div>
      </section>
    </div>
  </div>

</section> <?php include('templates/footer.php'); ?>