<html>
<head>
<title>Untitled Document</title>

<!--<a href="seller_home.php"><p align="right">HOME</p></a>-->
<center><button><a  href="../seller/seller_home_temp/seller_homepage.php">HOME</a></button></center>
<style>
    body{
        background-image: url("../image/5514209.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</head>

<body>
<h1><center>Seller Update</center></h1>

<form action="seller_update_conn.php" method="post">
<table align="center">
<center><tr><th>Seller Id:</th><td><input type="number" name="sid" autofocus required readonly value=<?php session_start(); $sid = $_SESSION['sid']; echo $sid; ?>></td></center>
<tr><td>Name:</td>
<td><input type="text" name="sellername" required autofocus ></td></tr>
<tr><td>Address:</td>
<td><textarea type="text" name="address" required ></textarea></td></tr>
<tr><td>Phone Number:</td>
<td><input type="text" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" required ></td></tr>
<tr><td>Aadhar Number:</td>
<td><input type="text" name="aadhar" pattern="[0-9]+" maxlength="12" minlength="12" required></td></tr>
<tr><td>Password:</td>
<td><input type="text" name="password" minlength="6" maxlength ="6" required autofocus ></td></tr>

<!---<tr><td>Gender:</td>
<td><input type="radio" value="male"/>M
    <input type="radio" value="female"/>F</td></tr>-->
</table>
<center><input type="submit" value="UPDATE"></center>
</form>
</body>
</html>