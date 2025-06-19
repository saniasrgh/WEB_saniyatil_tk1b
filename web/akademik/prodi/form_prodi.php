<h1>Form Prodi</h1>
    <a href="index.php?folder=prodi&page=data_prodi" class="btn btn-dark">Data Prodi</a>
        <form action="prodi/proses_prodi.php" method="POST">
            <div class="mb-3">
                <label for="kode_prodi" class="form-label">Kode prodi</label>
                <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" required>
            </div>
            <div class="mb-3">
                <label for="nama_prodi" class="form-label">NAMA PRODI</label>
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">KETERANGAN</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
            </div>
            <input class="btn btn-dark" type="submit" name="submit" value="Simpan"> 
        </form>