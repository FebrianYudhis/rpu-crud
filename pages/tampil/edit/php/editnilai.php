<?php
include("../../../../php/koneksi.php");
$a = $_POST['kode'];
$b = $_POST['nilai'];
$tambah = "UPDATE nilai SET nilai ='$b' WHERE kode_penilaian='$a'";
$sql = mysqli_query($koneksi, $tambah);
if ($sql) {
    echo "<script>alert('Data Berhasil Diubah !');window.location='../../utama.php'</script>";
} else {
    echo "<script>alert('Data Gagal Diubah !');window.location='../../utama.php'</script>";
}
