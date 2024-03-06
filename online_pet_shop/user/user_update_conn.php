<?php

$userid=$_POST['userid'];
$username=$_POST['username'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
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
	$sql="UPDATE user SET `username`='$username', `address`='$address', mobile='$mobile', `password`='$password' WHERE `userid`='$userid'";
	if ($conn->query($sql)) {
		echo "record is updated successfully";	
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
	$conn->close();
}

?>
<button><a  href="user_profile.php">VIEW PROFILE</a></button>