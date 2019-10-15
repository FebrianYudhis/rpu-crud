<?php $data['judul'] = "Tambah Data Mapel";
include('templates/header.php'); ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="php/tambahmapel.php">
            <div class="row">
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center" class="header">Masukkan Data Mata Pelajaran</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Mata Pelajaran :</p>
                            </td>
                            <td align="center"><input type="text" name="mapel" required placeholder="Masukkan Nama Mata Pelajaran"> </td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><button type="submit" class="kirim">Tambah</button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
<?php include('templates/footer.php'); ?>