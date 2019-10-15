<?php
include("../../../php/koneksi.php");
$a = $_REQUEST['nip'];
$hapus = "DELETE from guru WHERE nip='$a'";
$sql = mysqli_query($koneksi, $hapus);
if ($sql) {
    echo "<script>alert('Data Berhasil DiHapus !');window.location='../utama.php'</script>";
} else {
    echo "<script>alert('Data Gagal DiHapus!');window.location='../utama.php'</script>";
}
