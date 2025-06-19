<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <h1>Form Edit Mahasiswa</h1>
        <?php
          include 'koneksi.php'; 
          
          // Ambil ID dari URL
          $id = $_GET['id'];
          
          // Query untuk mendapatkan data mahasiswa
          $mahasiswa = $koneksi->query("SELECT * FROM tabel_mahasiswa WHERE id = '$id'");
          $row = $mahasiswa->fetch_assoc();
        ?>
        
        <form action="index.php?folder=mahasiswa&page=proses_mhs" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input value="<?= $row['nim'] ?>" 
                       type="number" class="form-control" id="nim" name="nim" required>
            </div>
            
            <div class="mb-3">
                <label for="prodi_id" class="form-label">Prodi</label>
                <select name="prodi_id" id="prodi_id" class="form-control" required>
                    <option value="">Pilih Prodi</option>
                    <?php
                    $query_prodi = $koneksi->query('SELECT * FROM tabel_prodi');
                    while ($p = $query_prodi->fetch_assoc()) { ?>
                        <option value="<?= $p['id'] ?>" <?= ($row['prodi_id'] == $p['id']) ? 'selected' : '' ?>>
                            <?= $p['nama_prodi'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input value="<?= $row['nama'] ?>" 
                       type="text" class="form-control" id="nama" name="nama" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input value="<?= $row['email'] ?>" 
                       type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $row['alamat'] ?></textarea>
            </div>
            
            <button class="btn btn-primary" type="submit" name="update">Update Data</button>
            <a href="index.php?folder=mahasiswa&page=data_mhs" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>