<?php $data['judul'] = "Edit Data Guru";
$data['base'] = "../guru.php";
$data['ajax'] = "guru";
include('templates/header.php'); ?>

<!-- Main content -->
<?php
include("../../../php/koneksi.php");
$nis = $_REQUEST['nis'];
$query =  "SELECT * FROM siswa WHERE nis=$nis";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
?>
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="php/editsiswa.php" enctype="multipart/form-data">
            <div class="row">
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center" class="header">Masukkan Data Siswa</td>
                        </tr><input type="hidden" value="<?php echo $nis; ?>" name="nis">
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nama :</p>
                            </td>
                            <td align="center"><input type="text" name="nama" required placeholder="Masukkan Nama" value="<?php echo $tampil['nama']; ?>"></td>
                        </tr>
                        <tr>
                            <td align=" center">
                                <p class="tulisan">Jenis Kelamin :</p>
                            </td>
                            <td align="center"><select name="jk" required>
                                    <?php if ($tampil['jenis_kelamin'] == 'laki-laki') { ?>
                                        <option value="laki-laki" selected>Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option><?php } ?>
                                    <?php if ($tampil['jenis_kelamin'] == 'perempuan') { ?>
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan" selected>Perempuan</option><?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Tempat Lahir :</p>
                            </td>
                            <td align="center"><input type="text" name="tlahir" required placeholder="Masukkan Tempat Lahir" value="<?php echo $tampil['tempat_lahir']; ?>"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Tanggal Lahir : </p>
                            </td>
                            <td align="center"><input type="date" name="tanggall" required placeholder="Masukkan Tanggal Lahir" value="<?php echo $tampil['tanggal_lahir']; ?>"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Alamat :</p>
                            </td>
                            <td align="center"><input type="text" name="alamat" required placeholder="Masukkan Alamat" value="<?php echo $tampil['alamat']; ?>"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Kelas :</p>
                            </td>
                            <td align="center"><select name="kelas" required>
                                    <?php if ($tampil['kelas'] == 10) {  ?>
                                        <option value="10" selected>X (Sepuluh)</option>
                                        <option value="11">XI (Sebelas)</option>
                                        <option value="12">XII (Dua Belas)</option> <?php } ?>
                                    <?php if ($tampil['kelas'] == 11) {  ?>
                                        <option value="10">X (Sepuluh)</option>
                                        <option value="11" selected>XI (Sebelas)</option>
                                        <option value="12">XII (Dua Belas)</option> <?php } ?>
                                    <?php if ($tampil['kelas'] == 12) {  ?>
                                        <option value="10">X (Sepuluh)</option>
                                        <option value="11">XI (Sebelas)</option>
                                        <option value="12" selected>XII (Dua Belas)</option> <?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Gambar :</p>
                            </td>
                            <td align="center"><input type="file" name="file"></td>
                        </tr>
                        <tr>
                            <td align=" center" colspan="2"><button type="submit" class="kirim">Edit</button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
<?php include('templates/footer.php'); ?>