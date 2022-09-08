<?php

for($i=0;$i<=5;$i++)
{
    for($j=5-$i;$j>=0;$j--){
    echo "*";
    }
echo "<br>";
}


echo "<hr>";

for ($x = 1; $x <= 9; $x++) {
        for ($y = 1; $y <= $x; $y++) {
            echo "*";
        }
        echo "<br>";
    }

echo "<hr>";

$size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}

echo "<hr>";

for($i=1; $i<=5; $i++)
{
 for($j=5; $j>$i; $j--)
  echo "&nbsp;&nbsp;";
 for($k=1; $k<=$i; $k++)
  echo "*";
 echo "<br>";
}
echo "<br>";

echo "<hr>";

for ($i=1; $i<=5; $i++)
{
 for($j=1; $j<$i; $j++)
  echo "&nbsp;&nbsp;";
 for($k=5; $k>=$i; $k--)
  echo "*";
 echo "<br>";
}

echo "<hr>";

for($i=5; $i>=1; $i--)
{
 for($j=$i; $j<5; $j++)
  echo "&nbsp;&nbsp;";
 for($k=$i*2; $k>1; $k--)
  echo "*";
 echo "<br>";
}

echo "<hr>";

for($i=1; $i<=5; $i++)
{
 for($j=$i; $j<5; $j++)
  echo "&nbsp;&nbsp;";
 for($k=1; $k<$i*2; $k++)
  echo "*";
 echo "<br>";
}
// Second Part
for($i=4; $i>=1; $i--)
{
 for($j=5; $j>$i; $j--)
  echo "&nbsp;&nbsp;";
 for($k=1; $k<$i*2; $k++)
  echo "*";
 echo "<br>";
}

echo "<hr>";

 $size = 5;
    for($i = 0; $i < $size; $i++) {
        // print column
        for($j = 0; $j < $size; $j++) {
            // print only star in first and last row
            if($i === 0 || $i === $size - 1) {
                echo "*";
            }
            else {
                // print star only in first and last position row
                if($j === 0 || $j === $size - 1) {
                    echo "*";
                }
                else {
                    // use &nbsp; for space
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }

    echo '<hr>';

    for ($x = 9; $x >= 1; $x--) {
        for ($y = 1; $y <= $x; $y++) {
            echo "$y";
        }
        echo "<br>";
    }

    echo "<hr>";

    

?>