<?php
include("../../../php/koneksi.php");
$a = $_POST['nis'];
$b = $_POST['mapel'];
$c = $_POST['nilai'];
$tambah = "INSERT INTO nilai VALUES('','$a','$b','$c')";
$sql = mysqli_query($koneksi, $tambah);
if ($sql) {
    echo "<script>alert('Data Berhasil Disimpan !');window.location='../../tampil/utama.php'</script>";
} else {
    echo "<script>alert('Data Gagal Disimpan !');window.location='../../tampil/utama.php'</script>";
}
