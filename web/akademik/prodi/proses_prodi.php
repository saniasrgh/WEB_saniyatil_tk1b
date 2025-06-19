<?php
//panggil file koneksi
include '../koneksi.php';

if(isset($_POST['submit'])){
    $kode_prodi = $_POST['kode_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $keterangan = $_POST['keterangan'];
    

    //cek duplikat data nim atau email
    $sql_check = "SELECT * from tabel_prodi where kode_prodi='$kode_prodi' OR keterangan='$keterangan'";
    $query_check = $koneksi->query($sql_check);
    if ($query_check->num_rows > 0){
        echo "<script>
            alert('Kode prodi sudah terdaftar');
            window.location.href = '../index.php?folder=prodi&page=form_prodi'; 
        </script>";
        exit; 
    }

    //insert data dengan statement prepare
    $sql = "INSERT INTO tabel_prodi (kode_prodi,nama_prodi, keterangan)
    VALUES (?, ?, ?)";
    $query_prepare = $koneksi->prepare($sql);
    $query_prepare->bind_param("sss",$kode_prodi,$nama_prodi,$keterangan);

    if ($query_prepare->execute()){
        echo "<script>
            alert('Data prodi berhasil disimpan');
            window.location.href = '../index.php?folder=prodi&page=data_prodi'; 
        </script>"; //menyambungkan ke halaman web yg baru (redairect)
    }else {
        echo "<script>
            alert('Data prodi gagal disimpan');
            window.location.href = '../index.php?folder=prodi&page=form_prodi'; 
        </script>";
    }
    $query_prepare->close();



}else if(isset($_POST['update'])){
    //block kode untuk update
    $kode_prodi = $_POST['kode_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $keterangan = $_POST['keterangan'];
    $id = $_POST['id'];


    $sql_check = "SELECT * FROM tabel_prodi WHERE (kode_prodi='$kode_prodi' OR keterangan='$keterangan')
    AND id != '$id'";
    $query_check = $koneksi->query($sql_check);

    if ($query_check->num_rows > 0){
        echo "<script>
            alert('Kode prodi sudah digunakan');
            window.location.href = '../index.php?folder=mahasiswa&page=data_mhs'; 
        </script>";
        exit;
    }

    $sql = "UPDATE tabel_prodi SET kode_prodi = '$kode_prodi', nama_prodi = '$nama_prodi', keterangan = '$keterangan' WHERE id = '$id'";
    $query = $koneksi->query($sql);

    if ($query) {
        echo "<script>
                    alert('Data prodi berhasil diperbarui!');
                    window.location.href = '../index.php?folder=prodi&page=data_prodi';
                </script>";
    } else {
        echo "<script>
                    alert('Data prodi gagal diperbarui!');
                    window.location.href = '../index.php?folder=prodi&page=update_prodi';
                </script>";
    }
    

}else if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM tabel_prodi WHERE id='$id'";
    $query = $koneksi->query($sql);

    if ($query){
        echo "<script>
            alert('Data prodi berhasil dihapus');
            window.location.href = '../index.php?folder=prodi&page=data_prodi'; 
        </script>";
    }else {
        echo "<script>
            alert('Data prodi gagal dihapus');
            window.location.href = '../index.php?folder=prodi&page=data_prodi'; 
        </script>";
    }
}

?>