<!DOCTYPE html>
<head>  
</head>
<body>
<?php
 
if(isset($_GET['product']))
{

  $connect = mysqli_connect('localhost','root','','producten')
 or die('Error connecting to MySQL server.');
  $waarde2 = $_GET ['product'];


  $sql = "DELETE FROM producten WHERE product = '$waarde2'";
  echo $sql;


  $retval = mysqli_query( $connect, $sql  );
  if(! $retval )
  {
    die('Could not delete data: ' . mysqli_error());
  }
  echo "Deleted data successfully\n";
  mysqli_close($connect);
  header("refresh:1; url=prijzenlijst.php");
}
else
{
  echo"Data NOT deleted";
};
?>

</body>
</html>