<form action="rumus persegi" method="POST">
<h1> Rumus luas dan keliling persegi </h1>
<p>Sisi : </p>
<input type="number" name="sisi" placeholder="Ex. 5">
<input type="submit" name="proses" value="Hitung luas dan keliling">
</form>

<?php
if (isset($_POST["proses"])) {
$sisi = $_POST["sisi"];
$luas = $sisi * $sisi;
$keliling = 4 * $sisi;

echo "Sisi ; $sisi <br>";
echo "Luas Persergi : $luas <br>";
echo "Keliling : $sisi <br>";

}
?>
