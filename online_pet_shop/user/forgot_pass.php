<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password | User</title>
</head>
<body>
<style>
    body{
        background-image: url("../image/viewwwpetadmin.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>

  <center>
  <h1>ONLINE PET SHOP</h1>
	<h2>Forgot Password</h2>
  <form action="forgot_conn.php" method="POST" enctype="multipart/form-data">
  <table>
  <tr><td><b>Email:</b></td><td>
    <input type="email" name="email" required autofocus autocomplete="off"></td></tr>
    <tr><td><b>Mobile:</b></td><td>
    <input type="text" name="mobile" required minlength="10" maxlength="10" required pattern="[0-9]+" autocomplete="off"></td></tr>
  </table><br>
    <input type="submit" value="Submit">
    <br><br><br><br><br><br><br>
	
		<?php
			session_start();
		    if(isset($_SESSION['tmp1']))
		    {
				echo '<br><p class="error">'.$_SESSION['tmp1'].'</p>';
		    	unset($_SESSION['tmp1']);
		    }
		?>

		<?php
		    if(isset($_SESSION['tmp1']))
		    {
				echo '<br><p class="msg">Your Password is: '.$_SESSION['tmp1'].'</p>';
		    	unset($_SESSION['tmp1']);
		    }
		?>
  </center>
</form>
<center><button><a href="../user/login1.php">HOME</a></button></center>
</body>
</html>