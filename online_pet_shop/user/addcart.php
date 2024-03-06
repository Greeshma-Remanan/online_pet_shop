<!DOCTYPE html>
<html>
<head>
	<title>ADD TO CART </title>
</head>
<body>
   

    <center><h1><a class="a2" href="user_home_temp/user_homepage.php">Home</a></h1></center>

 
<br>


<table align="center" border="1" bgcolor="LightGoldenRodYellow">
<form action="" method="POST" enctype="multipart/form-data"> 
        
<?php
session_start();
$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_pet_shop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}

 // $txt7=filter_input(INPUT_POST, 'items_id');
 $accid=$_GET['accid'];
 $userid=$_SESSION['userid'];
 echo "<td><a href=book_accessories.php?accid=".$row["accid"].">BOOK</a></td>";

//avoid multiple wishlist
$sql2 = "SELECT * from addcart where accid='$accid' and userid='$userid';";
$result2=mysqli_query($conn, $sql2);
$resultCheck2 = mysqli_num_rows($result2);
if($resultCheck2 > 0){
     die(header("Location:view_cart.php"));
}


$sql="INSERT INTO `addcart`(`accid`,userid)
	values('$accid','$userid')";
	if ($conn->query($sql)) {
        header('Location: view_cart.php');
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
    ?>
        

</table>
</body>
</html>