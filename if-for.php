<?php
$nilai = 78;
echo "Nilai kamu adalah $nilai <br>";
echo "Maka status kamu = ";
if ($nilai > 78) {
    echo "Lulus";
}elseif ($nilai == 78) {
    echo "Pas KKM";
} else {
    echo "Tidak lulus";}

    echo "<hr>";

    $nilai_web = 79;
    $nilai_pbo = 82;
echo "NIlai web kamu = $nilai_web <br>";
echo "Nilai pbo kamu = $nilai_pbo <br>";
echo "Kelulusan kamu = ";
    if ($nilai_web >= 80 AND $nilai_pbo >= 80) {
        echo "Lulus 2 mapel produktif";
    }
    else if($nilai_web >= 80 OR $nilai_pbo >= 80) {
        if ($nilai_web >= 80) {
            echo "Lulus mapel web";
        }
        if ($nilai_pbo >= 80) {
            echo "Lulus mapel pbo";
        }
    }
    else {
        echo "Tidak lulus mapel produktif";
    }

    echo "<hr>";

    $i = 1;
    while ($i <= 5){
    echo "Hello world! ke $i <br>";
    $i++;
    }

    echo "<hr>";
    $j = 1;
    do { 
        echo $j . "<br>"; 
        $j++;
    }
    while ($j <= 5);

    echo "<hr>";

    for ($k = 1; $k <= 10; $k++) {
        echo $k . "<br>";
    }

    echo "<hr>";

    for ($x = 9; $x >= 1; $x--) {
        for ($y = 1; $y <= $x; $y++) {
            echo "$y";
        }
        echo "<br>";
    }

    echo "<hr>";

    for ($z = 1; $z <= 10; $z++) {
        if ($z % 2 == 0) {
            echo $z . "- Genap <br>";
        }
        else {
            echo $z . "- Ganjil <br>";
        }
    }

    echo "<hr>";

?>    
