<?php
include("../../../../php/koneksi.php");
$a = $_POST['nis'];
$b = $_POST['nama'];
$c = $_POST['jk'];
$d = $_POST['tlahir'];
$e = $_POST['tanggall'];
$f = $_POST['alamat'];
$g = $_POST['kelas'];

if ($_FILES['file']['name'] != '') {
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5120000) {
            move_uploaded_file($file_tmp, '../../../../assets/img/profil/' . $nama);
            $tambah = "UPDATE siswa SET nama='$b',jenis_kelamin='$c',tempat_lahir='$d',tanggal_lahir='$e',alamat='$f',kelas='$g',gambar='$nama' WHERE nis='$a'";
            $sql = mysqli_query($koneksi, $tambah);
            if ($sql) {
                echo "<script>alert('Data Berhasil Diubah !');window.location='../../utama.php'</script>";
            } else {
                echo "<script>alert('Data Gagal Diubah !');window.location='../../utama.php'</script>";
            }
        }
    } else {
        echo "<script>alert('Hanya Gambar Dengan Ekstensi JPG Dan PNG Yang Boleh Di Upload !');window.location='../../utama.php'</script>";
    }
} else {
    $tambah = "UPDATE siswa SET nama='$b',jenis_kelamin='$c',tempat_lahir='$d',tanggal_lahir='$e',alamat='$f',kelas='$g' WHERE nis='$a'";
    $sql = mysqli_query($koneksi, $tambah);
    if ($sql) {
        echo "<script>alert('Data Berhasil Diubah !');window.location='../../utama.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !');window.location='../../utama.php'</script>";
    }
}
