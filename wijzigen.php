<?php

include("Connect.php");
$mode  = $_GET ["mode"];

if ($mode =="update"){


  $id = $_GET['id'];
 
  $sql = "SELECT * FROM producten WHERE id=$id";
  
  $result = $conn->query($sql);

  $row = $result->fetch();

  $id = $row["id"];
  $merk = $row["merk"];
  $product= $row["product"];
  $prijs= $row["prijs"];
  $aantal= $row["aantal"];
  $toevoeg_update= "update.php";


}

else{ 
  $id = "";
  $merk = "";
  $product = "";
  $prijs = "";
  $aantal = "";
  $toevoeg_update= "resultaat.php";

     }
   
?> 

<form action= "<?=$toevoeg_update?>" method="post">
            id: <input type="text" name="id" value="<?=$id?>"><br>
            merk: <input type="text" name="merk" value="<?=$merk?>"><br>
            product: <input type="text" name="product" value="<?=$product?>"><br>
            prijs: <input type="text" name="prijs" value="<?=$prijs?>"><br>
            aantal: <input type="text" name="aantal" value="<?=$aantal?>"><br>

        <input type="submit">
</form>