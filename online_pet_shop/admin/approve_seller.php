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


$sid=$_GET['sid'];

$sql = "UPDATE seller SET `status`='1' WHERE `sid`='$sid'";
 
if ($conn->query($sql) === TRUE) {
  echo "approved";
} 

else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();


?>
 <button><a href="view_seller.php">HOME</a></button>