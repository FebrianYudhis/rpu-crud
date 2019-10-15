<?php $data['judul'] = "Tambah Data Nilai";
include('templates/header.php'); ?>

<!-- Main content -->
<?php
include("../../php/koneksi.php");
$nis = mysqli_query($koneksi, "SELECT * FROM siswa");
$mapel = mysqli_query($koneksi, "SELECT * FROM mapel");
?>
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="php/tambahnilai.php">
            <div class="row">
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center" class="header">Masukkan Nilai Siswa</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nis :</p>
                            </td>
                            <td align="center"><select name="nis">
                                    <?php while ($tampil = mysqli_fetch_array($nis)) { ?>
                                        <option value="<?php echo $tampil['nis']; ?>"><?php echo $tampil['nama'] . " | " . $tampil['nis']; ?></option>
                                    <?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Kode Mapel :</p>
                            </td>
                            <td align="center"><select name="mapel">
                                    <?php while ($tampil = mysqli_fetch_array($mapel)) { ?>
                                        <option value="<?php echo $tampil['kode_mapel']; ?>"><?php echo $tampil['mapel'] . " | " . $tampil['kode_mapel']; ?></option>
                                    <?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nilai :</p>
                            </td>
                            <td align="center"><input type="number" name="nilai" required placeholder="Masukkan Nilai"> </td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><button type="submit" class="kirim">Tambah</button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
<?php include('templates/footer.php'); ?>