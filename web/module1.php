<?php
    echo ("Hello World!"); //fungsi

    $nama = ("Sania Saragih");
    $message = "<p>Halo $nama, Selamat Belajar PHP</p>";
    $message = '<p>Halo '.$nama.', Selamat Belajar PHP</p>';
    echo $message;

    //Tipe data (string, int, float, boolean, array)
    $a = "Eren"; //string
    $b = 20; //int
    $c = 3.50; //float
    $d = TRUE; //boolean
    $e = FALSE; //boolean
    $f = ["Tanjiro", 2002, 3.7, TRUE]; //array
    /*array (array harus dikonfersi ke string, tidak bisa langsung menggunakan "echo")*/

    echo $b;
    var_dump($a); //mencetak nilai apapun dri variabel


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=">
    </head>
    <body>
        <h4><?= $message ?></h4>
    </body>
</html>