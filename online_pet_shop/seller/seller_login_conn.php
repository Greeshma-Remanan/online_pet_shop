
<?php
	session_start();

	$conn=mysqli_connect("localhost", "root", "", "online_pet_shop");

	if(!$conn){
		die("Error: Failed to connect to database!");
	}

		 $email = $_POST['email'];
		 $password = $_POST['password'];


		$query2 = mysqli_query($conn, "SELECT * FROM `seller` WHERE `email`='$email' && `password`='$password' && `status`='1'") or die(mysqli_error());
		$fetch2=mysqli_fetch_array($query2);
		$count2=mysqli_num_rows($query2);




		if ( $count2 > 0)    {


			
			echo	$email=$fetch2['email'];
			echo	$password=$fetch2['password'];
				$_SESSION['sid']=$fetch2['sid'];
			echo	$_SESSION['sid'];
	
	
				 header('Location:seller_home_temp/seller_homepage.php');
				// // header('Location:../admin/admin_home.php');
	
		}	
		    else{
			$_SESSION['tmp']="Invalid username or password!";
			header('Location:seller_login.php');
		 }
	
		
?>
