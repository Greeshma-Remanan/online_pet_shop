<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_pet_shop";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$accid=$_POST['accid'];
$accesname=$_POST['accesname'];
$desc=$_POST['desc'];
$stocks=$_POST['stocks'];
$amount=$_POST['amount'];
$image=$_POST['image'];

$sql = "UPDATE accessories SET `accesname`='$accesname', `desc`='$desc', `stocks`='$stocks', `amount`='$amount', `image`='$image' WHERE `accid`='$accid'";
 
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} 

else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>
<center><button><a  href="view_accessories.php">HOME</a></button></center>