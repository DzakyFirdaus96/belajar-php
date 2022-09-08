<html>
<head>
<title>a</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td><input type="text" name="num1" value="" placeholder="Panjang A"/></td>
</tr>
<tr>
<td><input type="text" name="num2" value="" placeholder="Panjang B"/></td>
</tr>
<tr>
<td><input type="text" name="num3" value="" placeholder="Tinggi"/></td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
$area = ($a+$b) * $c / 2;
echo "Luas: ".$area . "<br>";
$cir = $a+$b+$c;
echo "Keliling: " .$cir;
return 0;
}
?>
</body>
</html>