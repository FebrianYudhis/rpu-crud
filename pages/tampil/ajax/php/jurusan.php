<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'tugas');
$perhalaman = 5;
$cari = mysqli_query($koneksi, "SELECT * FROM jurusan");
$semuadata = mysqli_num_rows($cari);
$halaman = ceil($semuadata / $perhalaman);
$aktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awal = ($perhalaman * $aktif) - $perhalaman;

$cari = $_GET['cari'];
$query = "SELECT * FROM jurusan WHERE kode_jurusan LIKE '%$cari%' OR nama_jurusan LIKE '%$cari%' ORDER by kode_jurusan asc LIMIT $awal, $perhalaman";
$sql = mysqli_query($koneksi, $query);
?>
<table border="1" class="table" style="margin-top:50px; margin-bottom:60px;">
    <tbody>
        <tr>
            <td align="center" class="header">Kode Mapel</td>
            <td align="center" class="header">Nama Mapel</td>
            <td align="center" class="header">Aksi</td>
        </tr>
        <tr><?php
            while ($tampil = mysqli_fetch_array($sql)) { ?>
                <td class="isi" align="center"><?php echo $tampil['kode_jurusan']; ?></td>
                <td class="isi" align="center"><?php echo $tampil['nama_jurusan']; ?></td>
                <td align="center"><a type="button" class="btn btn-info" href="edit/jurusan.php?kode=<?php echo $tampil['kode_jurusan']; ?>">Edit</a><a type="button" class="btn btn-danger" href="hapus/jurusan.php?kode=<?php echo $tampil['kode_jurusan']; ?>">Hapus</a></td>
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