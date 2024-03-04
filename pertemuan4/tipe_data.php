<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;
$namaDepan = "Ibnu";
$namaBelakang = 'Jakarta';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . '' . $namaBelakang;

$listMahasiswa = ["Wahid Abdullah", "Elmo Bahtiar", "Lendis Fabri"];
echo $listMahasiswa[0] ;
echo "<br>";
echo " Variabel a: {$a} <br>";
echo " Variabel b: {$b} <br>";
echo " Variabel c: {$c} <br>";
echo " Variabel d: {$d} <br>";
echo " Variabel e: {$e} <br>";
var_dump($e);
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "Nama Depan : {$namaDepan} <br>";
echo 'Nama Belakang :' . $namaBelakang . '<br>';
?>