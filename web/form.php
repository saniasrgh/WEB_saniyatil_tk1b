<!DOCTYPE html>
<html lang="en">
<heaad>
        <title></title>
</heaad>
<body>
    <h1>Penanganan Form</h1>
    <form action="proses.php" method="POST">
        <label for="">Nama : </label>
        <input type="text" name="nama"><br><br>
        <label for="">Usia : </label>
        <input type="number" name="usia"><br><br>
        <input type="submit" name="tombol">

    </form>
    <?php
        if(isset($_GET['tombol'])){
            echo "Nama : ".$_GET['nama']."<br>";
            echo "Usia : ".$_GET['usia']."<br>";
        }/*isset = mengecek nilai variabel yg diinput agar tdak muncul
         tampilan eror dilaman pertama*/

    ?>
</body>
</html>