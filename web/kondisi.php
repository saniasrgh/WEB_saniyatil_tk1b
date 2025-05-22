<?php
//if....elseif...else
$password = 1234;
if($password == "1234"){//== membandingkan
    echo "Password benar";
}

echo "<br>";
$angka = 5;
if($angka > 5){
    echo "Angka $angka besar dari 5";
}
else{
    echo "Angka $angka kecil dari 5";
}

echo "<br>";
if($angka == 5){
    echo "Angka sama dengan 5";
}
else if ($angka > 5){
    echo "Angka $angka besar dari 5";
}
else {
    echo "Angka $angka kecil dari 5";
}

echo "<br>";
//operator ternary
echo $password == 1234? "Password Benar" : "Password Salah";

echo "<br>";
//latihan
$nilai = 70;
/*
nilai >= 85 = A
nilai >= 75 = B
nilai >= 65 = C
nilai >= 55 = D
nilai < 55 = E
0 - 100
*/
if($nilai >= 85 && $nilai <= 100){
    $predikat = "A";
} elseif ($nilai >=75 && $nilai <=84){
    $predikat = "B";
} elseif ($nilai >= 65 && $nilai <=74){
    $predikat = "C";
} elseif ($nilai >= 55 && $nilai <65){
    $predikat = "D";
}else if($nilai >=1 && $nilai <=55){
    $predikat = "E";
}else {
    $predikat = "Nilai Tidak valid";
}
echo $predikat;

//switch case
echo "<br>";
$angkaBulan = 12;
    switch ($angkaBulan){
        case 1:
            $namaBulan = "Januari";
            break;
        case 2:
            $namaBulan = "Februari";
            break;
        case 3:
            $namaBulan = "Maret";
            break;
        case 4:
            $namaBulan = "April";
            break;
        case 5:
            $namaBulan = "Mei";
            break;
        case 6:
            $namaBulan = "Juni";
            break;
        case 7:
            $namaBulan = "Juli";
            break;
        case 8:
            $namaBulan = "Agustus";
            break;
        case 9:
            $namaBulan = "September";
            break;
        case 10:
            $namaBulan = "Oktober";
            break;
        case 11:
            $namaBulan = "November";
            break;
        case 12:
            $namaBulan = "Desember";
            break;
        default:
            $namaBulan = "Nama bulan tidak valid";
    }
    
echo "Bulan ke $angkaBulan adalah $namaBulan";

//switch case latihan
echo "<br>";
$nilai2 = 90;
    switch ($nilai2){
        case ($nilai2 >= 85 && $nilai2 <= 100):
            $predikat = "A";
            break;
        case ($nilai2 >= 65 && $nilai2 <=74):
            $predikat = "B";
            break;
        case ($nilai2 >= 65 && $nilai2 <=74):
            $predikat = "C";
            break;
        case ($nilai2 >= 55 && $nilai2 <65):
            $predikat = "D";
            break;
        case ($nilai2 >=1 && $nilai2 <=55):
            $predikat = "E";
            break;
    }
echo "Predikat untuk nilai $nilai2 adalah $predikat";
?>
