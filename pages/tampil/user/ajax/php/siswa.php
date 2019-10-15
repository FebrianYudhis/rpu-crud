<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'tugas');
$perhalaman = 5;
$cari = mysqli_query($koneksi, "SELECT * FROM siswa");
$semuadata = mysqli_num_rows($cari);
$halaman = ceil($semuadata / $perhalaman);
$aktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awal = ($perhalaman * $aktif) - $perhalaman;
$sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER by nama asc LIMIT $awal, $perhalaman");

$cari = $_GET['cari'];
$query = "SELECT * FROM siswa WHERE nama LIKE '%$cari%' OR nis LIKE '%$cari%' ORDER by nama asc LIMIT $awal, $perhalaman";
$sql = mysqli_query($koneksi, $query);
?>

<div class="row">
    <?php foreach ($sql as $s) { ?>
        <div class="col-md-4 mt-5">
            <div class="card" style="width: 18rem;">
                <img src="../../../assets/img/profil/<?= $s['gambar']; ?>" class="card-img-top" alt="Tidak ada gambar">
                <div class="card-body">
                    <h5 class="card-title"><?= $s['nis']; ?></h5>
                    <p class="card-text"><?= $s['nama']; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $s['tempat_lahir']; ?> , <?= $s['tanggal_lahir']; ?></li>
                    <li class="list-group-item"><?= $s['jenis_kelamin']; ?></li>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>
<hr class="divider"><br>
<?php
if ($cari == '') {
    if ($aktif > 1) { ?>
        <a href="?halaman=<?php echo $aktif - 1; ?>">&laquo</a>
    <?php } ?>
    <?php
        for ($i = 1; $i <= $halaman; $i++) {
            if ($i == $aktif) { ?>
            <a href="?halaman=<?php echo $i; ?>" style="font-weight:bold; color:aqua;"><?php echo $i; ?> </a> |
        <?php } else { ?>
            <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?> </a> |
        <?php } ?>
    <?php
        }
        ?>
    <?php
        if ($aktif < $halaman) { ?>
        <a href="?halaman=<?php echo $aktif + 1; ?>">&raquo</a>
    <?php } ?>
    <div class="mb-5"></div>
<?php } ?>