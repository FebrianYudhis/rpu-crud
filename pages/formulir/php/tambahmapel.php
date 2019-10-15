<?php
include("../../../php/koneksi.php");
$a = $_POST['mapel'];


$tambah = "INSERT INTO mapel VALUES('','$a')";
$sql = mysqli_query($koneksi, $tambah);
if ($sql) {
    echo "<script>alert('Data Berhasil Disimpan !');window.location='../../tampil/utama.php'</script>";
} else {
    echo "<script>alert('Data Gagal Disimpan !');window.location='../../tampil/utama.php'</script>";
}
