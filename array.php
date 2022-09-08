<?php
$nama = "Rizky Catur";
echo $nama . "<br>";

$nama_array = array("Fariz", "Eben", "Haikal", "Rizky Giant", "Indra");
print_r($nama_array); echo "<br>";

echo $nama_array[0] . "<br>";
echo $nama_array[1] . "<br>";
echo $nama_array[2] . "<br>";

echo "<hr>";

foreach ($nama_array AS $datanama) {
    echo $datanama . "<br>";
}

echo "<hr>";

for ($i = 0; $i < COUNT($nama_array); $i++) {
    echo $nama_array[$i] . "<br>";
}

$keals11rpl1 = array(
     array("Rizky Catur", "L", "A"),
     array("Eben", "L", "Main Bola"),
     array("Farix", "L", array("Main Game", "Mancing", "Basket")),
     array("Volly", array("Main Layangan"), array("Main Layangan"))

);

echo "<pre>";
print_r($keals11rpl1);
echo "</pre>";

echo "<hr>";
echo $keals11rpl1[1][2] . " ";
echo $keals11rpl1[2][2][2];