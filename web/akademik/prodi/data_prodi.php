<h1>Data Prodi</h1>
<a href="index.php?folder=prodi&page=form_prodi" class="btn btn-dark">Input Data Prodi</a>
<form action="prodi/proses_prodi.php" method="POST">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">KODE PRODI</th>
                <th scope="col">NAMA PRODI</th>
                <th scope="col">KETERANGAN</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
              //query untuk megambil data dari tabel_prodi
              include 'koneksi.php';
              $prodi = $koneksi->query("SELECT * FROM tabel_prodi");
              $nomor = 1;
              while($row = $prodi->fetch_assoc()){
            ?>
            <tr>
                <th scope="row"><?= $nomor++ ?></th>
                <td><?= $row['kode_prodi'] ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="index.php?folder=prodi&page=update_prodi&id=<?= $row['id'] ?>"
                            class="btn btn-warning btn-sm">Edit</a>
                        <form action="prodi/proses_prodi.php" method="POST">
                            <input type="hidden" name="id" value="<?=$row['id']?>">
                            <input onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" type="submit"
                                name="delete" value="Hapus" class="btn btn-danger btn-sm">
                        </form>
                    </div>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>