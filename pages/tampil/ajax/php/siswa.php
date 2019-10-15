<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'tugas');
$perhalaman = 8;
$cari = mysqli_query($koneksi, "SELECT * FROM siswa");
$semuadata = mysqli_num_rows($cari);
$halaman = ceil($semuadata / $perhalaman);
$aktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awal = ($perhalaman * $aktif) - $perhalaman;

$cari = $_GET['cari'];
$query = "SELECT * FROM siswa WHERE nama LIKE '%$cari%' OR nis LIKE '%$cari%' ORDER by nama asc LIMIT $awal, $perhalaman";
$sql = mysqli_query($koneksi, $query);
?>
<table border="1" class="table" style="margin-top:50px; margin-bottom:60px;">
    <tbody>
        <tr>
            <td align="center" class="header">Nis</td>
            <td align="center" class="header">Nama</td>
            <td align="center" class="header">Jenis Kelamin</td>
            <td align="center" class="header">Tempat Lahir</td>
            <td align="center" class="header">Tanggal Lahir</td>
            <td align="center" class="header">Alamat</td>
            <td align="center" class="header">Kelas</td>
            <td align="center" class="header">Jurusan</td>
            <td align="center" class="header">Gambar</td>
            <td align="center" class="header">Aksi</td>
        </tr>
        <tr><?php
            while ($tampil = mysqli_fetch_array($sql)) { ?>
                <td class="isi" align="center"><?php echo $tampil['nis']; ?></td>
                <td class="isi" align="center"><?php echo $tampil['nama']; ?></td>
                <td class="isi" align="center"><?php echo $tampil['jenis_kelamin']; ?></td>
                <td class="isi" align="center"><?php echo $tampil['tempat_lahir']; ?></td>
                <td class="isi" align="center"><?php echo $tampil['tanggal_lahir']; ?></td>
                <td class="isi" align="center"><?php echo $tampil['alamat']; ?></td>
                <td class="isi" align="center"><?php echo $tampil['kelas']; ?></td>
                <?php
                    $ambil = $tampil['kode_jurusan'];
                    $aha = mysqli_query($koneksi, "SELECT * from jurusan WHERE kode_jurusan = $ambil");
                    $jurusan = mysqli_fetch_array($aha); ?>
                <td class="isi" align="center"><?php echo $jurusan['nama_jurusan']; ?></td>
                <td class="isi" align="center"><img src="../../assets/img/profil/<?= $tampil['gambar']; ?>" alt="" class="img-thumbnail"></td>
                <td align="center"><a type="button" class="btn btn-info" href="edit/siswa.php?nis=<?php echo $tampil['nis']; ?>">Edit</a><a type="button" class="btn btn-danger" href="hapus/siswa.php?nis=<?php echo $tampil['nis']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<!--NAVIGATION-->
<?php if ($cari == '') { ?>
    <div style="margin-bottom:40px; font-size:25px;">
        <?php
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
    <?php }
    } ?>