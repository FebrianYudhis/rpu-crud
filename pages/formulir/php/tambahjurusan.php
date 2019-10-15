<?php
include("../../../php/koneksi.php");
$a = $_POST['jurusan'];
$b = $_POST['deskripsi'];
$c = $_POST['icon'];
$tambah = "INSERT INTO jurusan VALUES('','$a','$b','$c')";
$sql = mysqli_query($koneksi, $tambah);
if ($sql) {
    echo "<script>alert('Data Berhasil Disimpan !');window.location='../../tampil/utama.php'</script>";
} else {
    echo "<script>alert('Data Gagal Disimpan !');window.location='../../tampil/utama.php'</script>";
}
