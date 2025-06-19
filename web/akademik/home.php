<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        /* Reset dan fondasi */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f9fb;
            color: #333;
        }
        /* Spasi konten utama */
        .content {
            padding: 40px 20px 60px 20px;
            max-width: 900px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            font-size: 2.4rem;
            color: #222;

        }
        h2 {
            text-align: center;
            font-size: 1.3rem;
            color: #00bcd4;
            margin-bottom: 28px;
        }
        p {
            margin-bottom: 16px;
            line-height: 1.7;
            font-size: 0.95rem;
            text-align: justify;
        }
        /* Tombol-tombol */
        .card-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 30px;
        }
        .card-link {
            background-color:rgb(11, 12, 12);
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: background 0.3s ease;
        }
        .card-link:hover {
            background-color: #00c1d4;
        }
    </style>
</head>
<body>

    <!-- Konten halaman utama -->
    <div class="content">
        <h1 class="fw-bold">SELAMAT DATANG DI JURUSAN TEKNOLOGI INFORMASI</h1>
        <br>
        <h2 class="fw-bold">POLITEKNIK NEGERI PADANG</h2>
        <p>
            Teknologi Informasi (TI), atau dalam bahasa Inggris dikenal dengan istilah <em>Information Technology (IT)</em>, adalah istilah umum untuk teknologi apa pun yang membantu manusia dalam membuat, mengubah, menyimpan, mengomunikasikan dan/atau menyebarkan informasi.
        </p>
        <p>
            TI mencakup proses, perangkat lunak, perangkat keras, bahasa pemrograman, dan sistem informasi. TI sangat penting dalam otomatisasi, penyampaian informasi, dan efisiensi kerja.
        </p>
        <div class="card-links">
            <a href="index.php?folder=mahasiswa&page=data_mhs" class="card-link">Data Mahasiswa</a>
            <a href="index.php?folder=prodi&page=data_prodi" class="card-link">Data Program Studi</a>
        </div>
    </div>
</body>
</html>
