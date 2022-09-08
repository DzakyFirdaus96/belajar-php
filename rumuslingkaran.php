<html>
<head>
<title>ouch</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td><input type="text" name="num1" value="" placeholder="Jari-jari lingkaran"/></td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Hitung"/></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$r = $_POST['num1'];
$pi = 3.14;
$area = $pi * $r * $r;
echo "Luas: ".$area . "<br>";
$cir = 2*$pi*$r;
echo "Keliling: " .$cir;
return 0;
}
?>
</body>
</html>