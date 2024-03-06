<!DOCTYPE html>
<html>
<head>
 <title><?php echo $_SESSION['userid']; ?> |Purchase Acessories</title>
</head>
<body>


<?php

$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_pet_shop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) { 
    die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
}
    
$accid=$_GET['accid'];
    
$sql1 = "SELECT * from accessories where accid='$accid';";
$result1=mysqli_query($conn, $sql1);
while ($row1 = mysqli_fetch_assoc($result1)) {
    $userid=$row1['userid'];
    $amount=$row1['amount'];
    $qty=$row1['qty'];
    
}
       
         $total=$amount*$qty;
  ?>

