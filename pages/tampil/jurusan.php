<?php $data['judul'] = "Data Jurusan";
$data['ajax'] = "jurusan";
include('templates/header.php');
$sql = mysqli_query($koneksi, "SELECT * FROM jurusan");
$a = 1;
?>
<!-- Main content -->
<section class="content mb-5">
    <div class="container-fluid">
        <table class="table table-bordered table-striped" id="datatabel">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Jurusan</th>
                    <th>Deskripsi</th>
                    <th>Icon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($jurusan = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $jurusan['nama_jurusan']; ?></td>
                        <td><?= $jurusan['deskripsi']; ?></td>
                        <td><i class="<?= $jurusan['icon']; ?>"></i></td>
                        <td>
                            <a class="btn btn-info" href="edit/jurusan.php?kode=<?= $jurusan['kode_jurusan']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus/jurusan.php?kode=<?= $jurusan['kode_jurusan']; ?>">Hapus</a></td>
                    </tr>
                <?php
                    $a++;
                } ?>
            </tbody>
        </table>
    </div>
</section>

<?php include('templates/footer.php'); ?>