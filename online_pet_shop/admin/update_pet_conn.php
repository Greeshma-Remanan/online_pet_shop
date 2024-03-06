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

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$desc=$_POST['desc'];
$stock=$_POST['stock'];
$amount=$_POST['amount'];
$image=$_POST['image'];

$sql = "UPDATE pet SET `pname`='$pname', `desc`='$desc', `stock`='$stock', `amount`='$amount', `image`='$image' WHERE `pid`='$pid'";
 
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} 

else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>
<center><button><a  href="../admin/admin_home_temp/admin_homepage.php">HOME</a></button></center>