<?php $data['judul'] = "Edit Data Nilai";
$data['base'] = "../nilai.php";
include('templates/header.php'); ?>

<!-- Main content -->
<?php
include("../../../php/koneksi.php");
$kode = $_REQUEST['kode'];
$query =  "SELECT * FROM nilai WHERE kode_penilaian=$kode";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
$nis = $tampil['nis'];
$kode_mapel = $tampil['kode_mapel'];
$ambil = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis=$nis"));
$mapel = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mapel WHERE kode_mapel=$kode_mapel"));
?>
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="php/editnilai.php">
            <div class="row">
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center" class="header">Masukkan Data Nilai</td>
                        </tr><input type="hidden" value="<?php echo $kode; ?>" name="kode">
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nama Siswa :</p>
                            </td>
                            <td align="center">
                                <p class="tulisan"><?php echo $ambil['nama']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nis Siswa :</p>
                            </td>
                            <td align="center">
                                <p class="tulisan"><?php echo $tampil['nis']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Mata Pelajaran :</p>
                            </td>
                            <td align="center">
                                <p class="tulisan"><?php echo $mapel['mapel']; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nilai :</p>
                            </td>
                            <td align="center"><input type="number" name="nilai" required placeholder="Masukkan Nilai" value="<?php echo $tampil['nilai']; ?>"></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><button type="submit" class="kirim">Edit</button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
<?php include('templates/footer.php'); ?>