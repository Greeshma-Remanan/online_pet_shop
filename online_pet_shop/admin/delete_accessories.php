<html>
<head>
<title>Delete Accessories</title>
<style>
    body{
        background-image: url("../image/viewwwpetadmin.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</head>
<body>
<?php
$accid=$_GET['accid'];
?>

       
<a href="view_accessories.php">
    <p align="right">HOME</p>
    </a>
<form align='center' style='color:black;margin-top:250px'method="POST" action="">
ACCESSORIES ID:<input type="text" name="accid" value="<?php echo $accid?>"readonly><br><br>
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
	$accid=$_POST['accid'];
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
	$query="delete from accessories where accid='$accid'";
	$data=mysqli_query($con,$query);
	header("Location:view_accessories.php");
	if(!$data)
	{
		echo " table error";
	}
	

    

}
?>
<!--<button><a href="view_pet.php">View Pet</a></button>
</body>-->

</html>


	
