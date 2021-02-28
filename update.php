<body>
<a href="prijzenlijst.php"> Tabel</a>
<br>

<?php
    include 'Connect.php';

$id = $_POST["id"];
$merk = $_POST["merk"];
$product = $_POST["product"];
$prijs = $_POST["prijs"];
$aantal = $_POST["aantal"];


    $stmt = $conn->prepare("UPDATE producten SET id=:id, merk=:merk, product=:product, prijs=:prijs, aantal=:aantal
                                            WHERE id=:id");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':merk', $merk);
    $stmt->bindParam(':product', $product);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->bindParam(':aantal', $aantal);


                if ($stmt->execute()){
                        echo "<p>"."<strong> Gewijzigd! </strong>"."</p>";
}
$conn = null;
?>


</body>
</html>