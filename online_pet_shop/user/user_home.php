<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
     body{
        background-image: url("../image/bgimage1.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</head>


<body  align="center">
<form align='center'>
  <h1><center>ONLINE PET SHOP</center></h1>
  <h3><center>Book Your Pets</center></h3>
  USER ID: <input type="text" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid; ?>">
  <button formaction="../user/user_profile.php"> PROFILE</a></button>
  <button formaction="../user/view_pet_user.php">VIEW PETS</a></button>
  <button formaction="../user/view_accessories_user.php">VIEW ACCESSORIES</a></button>

  <button formaction="../user/view_order.php">BOOKING DETAILS</a></button>
  <button formaction="../user/logout.php">LOGOUT</a></button>

  </a></button>




</body>
</html>