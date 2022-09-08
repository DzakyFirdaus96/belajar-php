<html>  
<body>  
<form method = "post">   
Panjang: <input type="number" name="base">   
<br><br>  
Tinggi: <input type="number" name="height"><br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
</body>   
</html>  
<?php   
if(isset($_POST['submit']))  
    {   
$base = $_POST['base'];   
$height = $_POST['height'];   
$area = ($base*$height) / 2;   
echo "Luas: $area";   
}   
?>   