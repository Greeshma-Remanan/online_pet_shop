<?php

$txt7=$_GET['accid'];

if (!empty($txt7)){

$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_pet_shop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}



else{


    $sql="DELETE FROM addcart where accid='$txt7'";
	
	$checkUser = "SELECT * from accessories where accid='$txt7'";
	$result=mysqli_query($conn, $checkUser);
	$count = mysqli_num_rows($result);
	if($count == 0){
		die("Invalid ID");
	}
	
	
	if($conn->query($sql)) {
        session_start();
        $_SESSION['tmp']="Item Removed from Wishlist Successfully!";
		header('Location:view_cart.php');
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
}
}

else{
	echo "ID should not be empty";
	die();
}

?>