<html>
<head>
<title>Delete Pet</title>
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
$pid=$_GET['pid'];
?>

       
<a href="view_pet.php">
    <p align="right">HOME</p>
    </a>
<form align='center' style='color:black;margin-top:250px'method="POST" action="">
Pet ID:<input type="text" name="pid" value="<?php echo $pid?>"readonly><br><br>
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
	$pid=$_POST['pid'];
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
	$query="delete from pet where pid='$pid'";
	$data=mysqli_query($con,$query);
	header("Location:view_pet.php");
	if(!$data)
	{
		echo " table error";
	}
	

    

}
?>
<!--<button><a href="view_pet.php">View Pet</a></button>
</body>-->

</html>


	
