<?php $data['judul'] = "Data Mapel";
$data['ajax'] = "mapel";
include('templates/header.php');
$sql = mysqli_query($koneksi, "SELECT * FROM mapel");
$a = 1;
?>
<!-- Main content -->
<section class="content mb-5">
    <div class="container-fluid">
        <table class="table table-bordered table-striped" id="datatabel">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($mapel = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $mapel['mapel']; ?></td>
                        <td>
                            <a class="btn btn-info" href="edit/mapel.php?kode=<?= $mapel['kode_mapel']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus/mapel.php?kode=<?= $mapel['kode_mapel']; ?>">Hapus</a></td>
                    </tr>
                <?php
                    $a++;
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<?php include('templates/footer.php'); ?>