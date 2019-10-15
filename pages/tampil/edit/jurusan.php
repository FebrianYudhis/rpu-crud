<?php $data['judul'] = "Edit Data Jurusan";
$data['base'] = "../jurusan.php";
include('templates/header.php'); ?>

<!-- Main content -->
<?php
include("../../../php/koneksi.php");
$kode = $_REQUEST['kode'];
$query =  "SELECT * FROM jurusan WHERE kode_jurusan=$kode";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
?>
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="php/editjurusan.php">
            <div class="row">
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center" class="header">Masukkan Data Jurusan</td>
                        </tr><input type="hidden" value="<?php echo $kode; ?>" name="kode">
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nama Jurusan:</p>
                            </td>
                            <td align="center"><input type="text" name="nama" required placeholder="Masukkan Nama Jurusan" value="<?php echo $tampil['nama_jurusan']; ?>"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Deskripsi Jurusan:</p>
                            </td>
                            <td align="center"><input type="text" name="deskripsi" required placeholder="Masukkan Deskripsi Jurusan" value="<?php echo $tampil['deskripsi']; ?>"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Icon Jurusan:</p>
                            </td>
                            <td align="center"><input type="text" name="icon" required placeholder="Masukkan Icon Jurusan" value="<?php echo $tampil['icon']; ?>"></td>
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