<?php
include("../../../php/koneksi.php");
$a = $_POST['nip'];
$b = $_POST['nama'];
$c = $_POST['jk'];
$d = $_POST['tlahir'];
$e = $_POST['tanggall'];
$f = $_POST['alamat'];
if ($_FILES['file']['name']) {
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 2048000) {
            move_uploaded_file($file_tmp, '../../../assets/img/profil/' . $nama);
            $tambah = "INSERT INTO guru VALUES('$a','$b','$c','$f','$d','$e','$nama')";
            $sql = mysqli_query($koneksi, $tambah);
            if ($sql) {
                echo "<script>alert('Data Berhasil Disimpan !');window.location='../../tampil/utama.php'</script>";
            } else {
                echo "<script>alert('Data Gagal Disimpan !');window.location='../../tampil/utama.php'</script>";
            }
        }
    }
} else {
    echo "<script>alert('Foto Tidak Dipilih !');window.location='../../tampil/utama.php'</script>";
}
