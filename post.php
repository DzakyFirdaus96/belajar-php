<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Indra L" />
     <input type="text" name="kelas" placeholder="Ex. 11 RPL 1" />
     <input type="number" name="nis" placeholder="Ex. 89866857" />
    <input type="submit" name="simpan" value="Simpan Data"/>
</form>

<?php
if (isset($_POST["simpan"])) {
    echo "<br>";
    $namalengkap = $_POST["namalengkap"];
    $kelas = $_POST["kelas"];
    $nis = $_POST["nis"];

    echo "Nama Lengkap : " . $namalengkap . "<br>";
    echo "Kelas : " . $kelas . "<br>";
    echo "NIS : " . $nis;


}
?>
