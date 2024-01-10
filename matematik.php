<?php 
$angka  = 50;
$angka1 = 10;
$angka2 = 20;

$hasil = $angka + $angka2 - 10;
echo "Hasil dari $angka + $angka2 - 10 = $hasil <br>";

$angka += $angka1;
echo "<br> Angka = ".$angka. "<br>";

echo 'angka gacha saat ini adalah '. rand(1, 31). '<br>';

echo max($angka, $angka1, $angka2);

