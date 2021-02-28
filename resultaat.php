<body>
<a href="prijzenlijst.php"> Tabel</a>
<br>

<?php 
Function BepMaxNr() : int {
	global $conn;
	$sql="SELECT MAX(id)+1 FROM producten";
	return (int) $conn->query($sql)->fetchColumn();
}


/*$id = $_POST['id'];*/
$merk = $_POST['merk'];
$product = $_POST['product'];
$prijs = $_POST['prijs'];
$aantal = $_POST['aantal'];

include "Connect.php";
$sql = "INSERT INTO producten (id, merk, product, prijs, aantal) 
              VALUES(" . BepMaxNr() . ", '$merk', '$product', '$prijs', '$aantal') "; 
echo $sql;

    if ($conn->query($sql) === true) 
{ 
    echo "Records inserted successfully."; 

} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "; 
}
$conn = null;
?>

</body>
</html>