<?php
include("../../../../php/koneksi.php");
$a = $_POST['kode'];
$b = $_POST['nama'];
$tambah = "UPDATE mapel SET mapel ='$b' WHERE kode_mapel='$a'";
$sql = mysqli_query($koneksi, $tambah);
if ($sql) {
    echo "<script>alert('Data Berhasil Diubah !');window.location='../../utama.php'</script>";
} else {
    echo "<script>alert('Data Gagal Diubah !');window.location='../../utama.php'</script>";
}
