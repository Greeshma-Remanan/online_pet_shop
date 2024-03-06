<?php

$sid=$_POST['sid'];
$sellername=$_POST['sellername'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$aadhar=$_POST['aadhar'];
$password=$_POST['password'];


$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_pet_shop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
//$conn = new mysqli("localhost","root","","alf");#connect database password and all

if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}
else{
	$sql="UPDATE seller SET `sellername`='$sellername', `address`='$address', mobile='$mobile',aadhar='$aadhar', `password`='$password' WHERE `sid`='$sid'";
	if ($conn->query($sql)) {
		echo "record is updated successfully";	
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
}

?>
<button><a  href="seller_profile.php">VIEW PROFILE</a></button>