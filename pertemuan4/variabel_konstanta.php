<?php 
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";
echo "Hasil Penjumlahan $angka1 dan $angka2 adalah $hasil.";
//Mendefinisikan konstanta nilain tetap
define("Nama_Situs","Websitrku.vom");
define("Tahun_Pendirian", 2023);

echo "Selamat datang di " . Nama_Situs . ", situs yang didirikan pada " . Tahun_Pendirian . ".";
?>