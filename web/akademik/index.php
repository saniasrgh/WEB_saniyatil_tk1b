<!--halaman login-->
<?php
session_start();
//cek apakah user sudah login atau belum
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        // menentukan judul halaman berdasarkan page
        $judul = 'E-SIA Politeknik Negeri Padang';

        $page = $_GET['page'] ?? 'home';

        switch ($page) {
            case 'home':
                $judul = 'Home | SIAKAD Teknologi Informasi';
                break;
            case 'data_mhs':
                $judul = 'Data Mahasiswa | SIAKAD  Teknologi Informasi';
                break;
            case 'form_mhs':
                $judul = 'Form Mahasiswa | SIAKAD  Teknologi Informasi';
                break;
            case 'update_mhs':
                $judul = 'Update Mahasiswa | SIAKAD Teknologi Informasi';
                break;
            case 'data_prodi':
                $judul = 'Data Prodi | SIAKAD Teknologi Informasi';
                break;
            case 'form_prodi':
                $judul = 'Form Prodi | SIAKAD Teknologi Informasi';
                break;
            case 'update_prodi':
                $judul = 'Update Prodi | SIAKAD Teknologi Informasi';
                break;
            default:
                $judul = 'SIAKAD Teknologi Informasi';
        }
        ?>
<title><?= $judul ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:rgb(0, 241, 253);" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                        $folder = $_GET['folder'] ?? '';
                        $page = $_GET['page'] ?? 'home';
                        ?>
                        <a class="nav-link <?= $page === 'home' ? 'active fw-bold text-dark' : '' ?>" href="index.php?page=home">
                            Home
                        </a>
                        <a class="nav-link <?= $folder === 'mahasiswa' ? 'active fw-bold text-dark' : '' ?>" href="index.php?folder=mahasiswa&page=data_mhs">
                            Mahasiswa
                        </a>
                        <a class="nav-link <?= $folder === 'prodi' ? 'active fw-bold text-dark' : '' ?>" href="index.php?folder=prodi&page=data_prodi">
                            Prodi
                        </a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['nama'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><?= $_SESSION['email'] ?></a></li>
                            <li><a class="dropdown-item" href="#"><?= $_SESSION['level'] ?></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container my-4">
        <!--Konten web berada disini-->
        <?php
        include 'koneksi.php';

        $folder = basename($_GET['folder'] ?? '');
        $page = basename($_GET['page'] ?? 'home');

        $file = $folder ? "$folder/$page.php" : "$page.php";

        if (file_exists($file)) {
            include $file;
        } else {
            echo "Halaman tidak tersedia.";
        }

        ?>
    </div>
    <!--Foother -->
    <div class="bg text-black text-center py-2" style="background-color:rgb(0, 241, 253);">
        Copyright &copy; <?= date('Y') ?> by Saniyatil Wada'I
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>