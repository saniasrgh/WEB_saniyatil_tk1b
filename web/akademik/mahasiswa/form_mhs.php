<h1>Form Mahasiswa</h1>
    <a href="index.php?folder=mahasiswa&page=data_mhs" class="btn btn-dark">Data Mahasiswa</a>
        <form action="mahasiswa/proses_mhs.php" method="POST">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input value="<?=$row['nim']?>" type="number" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA</label>
                <input value="" type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Prodi</label>
                <select name="kode_prodi" class="form-control" id="kode_prodi" required>
                    <option value="">Pilih Prodi</option>
                    <?php
                    include '../koneksi.php';
                    $query_prodi = $koneksi->query("SELECT * FROM tabel_prodi");
                    while($p = $query_prodi->fetch_assoc()){ ?>
                        <option value="<?= $p['id'] ?>"><?= $p['nama_prodi'] ?></option>
                        <?php }?>
                        ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">ALAMAT</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <input class="btn btn-dark" type="submit" name="submit" value="Simpan"> 
        </form>