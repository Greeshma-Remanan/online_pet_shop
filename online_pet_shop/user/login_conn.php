
<?php
	session_start();

	$conn=mysqli_connect("localhost", "root", "", "online_pet_shop");

	if(!$conn){
		die("Error: Failed to connect to database!");
	}

		$email = $_POST['user'];
		$password = $_POST['Password'];

		$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `email`='$email' && `password`='$password'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$count=mysqli_num_rows($query);

		$query1 = mysqli_query($conn, "SELECT * FROM `admin` WHERE `adminname`='$email' && `passcode`='$password'") or die(mysqli_error());
		$fetch1=mysqli_fetch_array($query1);
		$count1=mysqli_num_rows($query1);

        
		//$query2 = mysqli_query($conn, "SELECT * FROM `seller` WHERE `email`='$email' && `password`='$password'") or die(mysqli_error());
		//$fetch2=mysqli_fetch_array($query2);
		//$count2=mysqli_num_rows($query2);

		$query2 = mysqli_query($conn, "SELECT * FROM `seller` WHERE `email`='$email' && `password`='$password' && `status`='1'") or die(mysqli_error());
		$fetch2=mysqli_fetch_array($query2);
		$count2=mysqli_num_rows($query2);


		if($count1 > 0){
			$email=$fetch1['adminname'];
			$password=$fetch1['passcode'];


            header('Location:../admin/admin_home_temp/admin_homepage.php');
          
			//$_SESSION['users_id']=$row['users_id'];
		}

		elseif ( $count2 > 0)    {


			
				$email=$fetch1['email'];
				$password=$fetch1['password'];
				$_SESSION['sid']=$fetch2['sid'];
				echo	$_SESSION['sid'];
	
	
				 header('Location:../seller/seller_home_temp/seller_homepage.php');
				// header('Location:../admin/admin_home.php');
	
		}	
		
		else {

		
		    if($count > 0){
			$_SESSION['userid']=$fetch['userid'];
			$_SESSION['user']=$fetch['username'];

            header('Location:../user/user_home_temp/user_homepage.php');
          
			//$_SESSION['users_id']=$row['users_id'];
		}

		    else{
			$_SESSION['tmp']="Invalid username or password!";
			header('Location: login1.php');
		  }
		}
		
?>
