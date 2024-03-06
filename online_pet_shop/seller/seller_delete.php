<html>
<head>
<title>Deleteselller</title>
<style>
    body{
        background-image: url("../image/viewwwpetadmin.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</head>
<body>
  
       
<button><center><a href="../user/login1.php">HOME</a></center></button>
<form align='center' style='color:black;margin-top:250px'method="POST" action="">
EMAIL:<input type="text" name="email" ><br><br>
<button name="submit" value="submit">Submit</button><br>
</form>
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="online_pet_shop";

$conn = mysqli_connect($servername,$username,$password,$database_name);
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$con = mysqli_connect("localhost","root","","online_pet_shop");
	if (!$con)
	{
		echo "<br>";
		die('Could not connect: ' . mysqli_error());
	}
	
	$db=mysqli_select_db($con,"online_pet_shop");
	if (!$db)
	{
		die('Could not find database: ' . mysqli_error());
	}
	$query="delete from seller where email='$email'";
	$data=mysqli_query($con,$query);
	if(!$data)
	{
		echo " table error";
	}
	

    

}
?>
</body>

</html>


	
