<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Form Edit prodi</h1>
        <?php
        //query untuk megambil data dari tabel_prodi
        include __DIR__ . '/../koneksi.php';
        $id = $_GET['id'];
        $prodi = $koneksi->query("SELECT * FROM tabel_prodi WHERE id='$id'");
        //looping pengambilan data tabel
        $row = $prodi->fetch_assoc();
        ?>
        <a href="index.php?folder=prodi&page=data_prodi" class="btn btn-success">Data prodi</a>
        <form action="prodi/proses_prodi.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
                crossorigin="anonymous"></script>

            <div class="mb-3">
                <label for="kode_prodi" class="form-label">Kode Prodi</label>
                <input value="<?= $row['kode_prodi'] ?>" type="number" class="form-control" id="kode_prodi"
                    name="kode_prodi" required>
            </div>
            <div class="mb-3">
                <label for="nama_prodi" class="form-label">Nama Prodi</label>
                <input value="<?= $row['nama_prodi'] ?>" type="text" class="form-control" id="nama_prodi"
                    name="nama_prodi" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input value="<?= $row['keterangan'] ?>" type="keterangan" class="form-control" id="keterangan"
                    name="keterangan" required>
            </div>
            <input type="submit" class="btn btn-danger" name="update" value="Simpan">
            <a href="index.php?folder=prodi&page=data_prodi" class="btn btn-success">Kembali</a>
        </form>
    </div>
</body>

</html>