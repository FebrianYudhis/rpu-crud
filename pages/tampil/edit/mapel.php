<?php $data['judul'] = "Edit Data Mapel";
$data['base'] = "../mapel.php";
include('templates/header.php'); ?>
<!-- Main content -->
<?php
include("../../../php/koneksi.php");
$kode = $_REQUEST['kode'];
$query =  "SELECT * FROM mapel WHERE kode_mapel=$kode";
$sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_array($sql);
?>
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="php/editmapel.php">
            <div class="row">
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center" class="header">Masukkan Data Mapel</td>
                        </tr><input type="hidden" value="<?php echo $kode; ?>" name="kode">
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nama Mapel:</p>
                            </td>
                            <td align="center"><input type="text" name="nama" required placeholder="Masukkan Nama Mapel" value="<?php echo $tampil['mapel']; ?>"></td>
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