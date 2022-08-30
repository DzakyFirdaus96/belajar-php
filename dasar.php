<?php
// Variable 
$nama = "Rizki";
$usia = 16;
echo "Nama saya $nama <br>";
echo "Usia saya $usia tahun <br>";

// Tipe data
$namalengkap = "Dzaky Firdaus";
$umur = 15;
$nilai = 90.87;
$jomblo = TRUE;
$namarpl1 = array("Alya", "Dwi","Eben");

echo "Nama Lengkap : $namalengkap <br>";
echo "Umur : $umur <br>";
echo "Nilai : $nilai <br>";
echo "Jomblo : $jomblo <br>";

echo "Array 0 : $namarpl1[0] <br>";
echo "Array 2 : $namarpl1[2] <br>";
echo "<br>";

echo "Angka 1 : 10"; $angka1 = 10; echo "<br>";
echo "Angka 2 : 5"; $angka2 = 5; echo "<br>";

echo "Tambah : " , $tambah = $angka1 + $angka2 . "<br>";
echo "Kurang : " , $kurang = $angka1 - $angka2 . "<br>";
echo "Bagi : " , $bagi = $angka1 / $angka2 . "<br>";
echo "Kali : " , $kali = $angka1 * $angka2 . "<br>";
echo "Sisa Bagi : " , $sisabagi = $angka1 % $angka2 . "<br>";

$a = 10;
$b = 5;

echo "== :"; echo $a == $b; echo "<br>";
echo "> :"; echo $a > $b; echo "<br>";
echo "< :"; echo $a < $b; "<br>";
echo "!= :"; echo $a != $b; "<br>";
echo "=== :"; echo $a === $b; "<br>";

$x = 10;
$y = 20;

if ($x == 10 AND $y == 20) echo "Terpenuhi 2 variabel <br>"; 
if ($x == 10 AND $y == 10) echo "Terpenuhi 1 variabel <br>"; 
?>