<?php
//counted loop = perulangan yang terhitung

for($i = 1; $i<=6; $i++){ //i awalnya = start, i tengah = akhir
    echo "Nilai i = $i <br>";
}
for($i = 6; $i>=1; $i--){
    echo "<h$i>Heading $i</h$i>";
}
$prodi = ['TKOM', 'MI','TRPL','Animasi']; //Array
foreach($prodi as $key) { //variabel alias (as)
    echo "<p>$key</p>";
}
    
//uncounted loop 
$x =10;
while($x <=6){
    echo "Nilai x = $x<br>";
    $x++;
}
echo "<br>";
$y =10;
do{
    echo "Nilai y = $y<br>";
    $y++;
}while ($y<=6);

echo "<hr>";
//latihan
$a = 10;
echo "Anak ayam turun $a<br>";
while($a>=2){
    echo "Anak ayam turun $a, mati satu tinggal ".($a-1)."<br>";
    $a --;
}
echo "Anak ayam turun ".$a.", mati satu tinggal induknya";



?>