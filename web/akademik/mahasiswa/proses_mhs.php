<?php
    include __DIR__ . '/../koneksi.php';

    if(isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $prodi_id = $_POST['kode_prodi'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

    //     $sql = "INSERT INTO tabel_mahasiswa (nim, nama, email, alamat) VALUES ('$nim', '$nama', '$email', '$alamat')";
    //     $query = $koneksi->query($sql);

    //     if($query) {
    //         echo "Data mahasiswa berhasil disimpan";
    //     }else {
    //         echo "Data mahasiswa gagal disimpan";
    //     }
    // }

    // cek duplikat data nim atau email
    $sql_check = "SELECT * FROM tabel_mahasiswa WHERE nim = '$nim' OR email = '$email'";
    $query_check = $koneksi->query($sql_check);

    if($query_check->num_rows > 0) {
        echo "<script>
                    alert('NIM atau Email sudah terdaftar');
                    window.location.href = '../index.php?folder=mahasiswa&page=form_mhs';
                </script>";
        exit;
    }

    //insert data dengan statement prepare
        $sql = "INSERT INTO tabel_mahasiswa (nim, prodi_id, nama, email, alamat) VALUES (?, ?, ?, ?, ?)";
        $query_prepare = $koneksi->prepare($sql);
        $query_prepare->bind_param("sisss", $nim, $prodi_id, $nama, $email, $alamat);
        

        if($query_prepare->execute()) {
            // echo "Data mahasiswa berhasil disimpan";
            echo "<script>
                    alert('Data mahasiswa berhasil disimpan');
                    window.location.href = '../index.php?folder=mahasiswa&page=data_mhs';
                </script>";
        }else {
            echo "<script>
                    alert('Data mahasiswa gagal disimpan');
                    window.location.href = '../index.php?folder=mahasiswa&page=form_mhs';
                </script>";
        }

        

        $query_prepare->close();

        
    }elseif(isset($_POST['update'])) {
        $nim = $_POST['nim'];
        $prodi_id = $_POST['prodi_id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $id = $_POST['id'];

        $sql_check = "SELECT * FROM tabel_mahasiswa WHERE (nim = '$nim' OR email = '$email') AND id != '$id'";
        $query_check = $koneksi->query($sql_check);
    
        if($query_check->num_rows > 0) {
        echo "<script>
                alert('NIM atau Email sudah digunakan oleh mahasiswa lain');
                window.location.href = '../index.php?folder=mahasiswa&page=update_mhs&id=$id';
            </script>";
        exit;
    }

        $sql = "UPDATE tabel_mahasiswa SET nim = ?, prodi_id = ?, nama = ?, email = ?, alamat = ? WHERE id = ?";
    $query_prepare = $koneksi->prepare($sql);
    $query_prepare->bind_param("sisssi", $nim, $prodi_id, $nama, $email, $alamat, $id);

    if($query_prepare->execute()) {
        echo "<script>
                alert('Data mahasiswa berhasil diubah');
                window.location.href = 'index.php?folder=mahasiswa&page=data_mhs';
            </script>";
    } else {
        echo "<script>
                alert('Data mahasiswa gagal diubah: " . $koneksi->error . "');
                window.location.href = 'index.php?folder=mahasiswa&page=update_mhs&id=$id';
            </script>";
    }

    $query_prepare->close();

    }elseif(isset($_POST['delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE from tabel_mahasiswa WHERE id = '$id'";
        $query = $koneksi->query($sql);

        if($query) {
           echo "<script>
                    alert('Data mahasiswa berhasil disimpan');
                    window.location.href = '../index.php?folder=mahasiswa&page=data_mhs';
                </script>";
        }else {
            echo "<script>
                    alert('Data mahasiswa gagal disimpan');
                    window.location.href = '../index.php?folder=mahasiswa&page=data_mhs';
                </script>";
        }
    }
?>