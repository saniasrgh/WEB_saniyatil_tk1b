<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <a href="index.php?folder=mahasiswa&page=form_mhs" class="btn btn-dark mb-3">Input Data Mahasiswa</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>PRODI</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                
                // Query sederhana dulu
                $query = "SELECT * FROM tabel_mahasiswa ORDER BY id";
                $mahasiswa = $koneksi->query($query);
                $no = 1;
                
                if ($mahasiswa) {
                    while ($row = $mahasiswa->fetch_assoc()) { 
                        // Ambil nama prodi terpisah
                        $prodi_id = $row['prodi_id'];
                        $prodi_query = "SELECT nama_prodi FROM tabel_prodi WHERE id = '$prodi_id'";
                        $prodi_result = $koneksi->query($prodi_query);
                        $prodi_row = $prodi_result->fetch_assoc();
                        $nama_prodi = $prodi_row['nama_prodi'] ?? 'Tidak ada prodi';
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nim'] ?></td>
                            <td><?= $nama_prodi ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td>           
                            <div class="d-flex gap-1">
                                <a href="index.php?folder=mahasiswa&page=update_mhs&id=<?= $row['id'] ?>"
                                class="btn btn-warning btn-sm">Edit</a>
                                <form action="mahasiswa/proses_mhs.php" method="POST">
                                <input type="hidden" name="id" value="<?=$row['id']?>">
                                <input onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" type="submit"
                                name="delete" value="Hapus" class="btn btn-danger btn-sm">
                            </form>
                            </div>
                            </td>
                        </tr>
                        <?php 
                    }
                } else {
                    echo "Error: " . $koneksi->error;
                } ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>