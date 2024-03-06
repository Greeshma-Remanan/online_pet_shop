<html>
<head>
<title>Untitled Document</title>

<a href="user_home.php"><p align="right">HOME</p></a>
<style>
    body{
        background-image: url("../image/5514209.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</head>

<body>
<h1><center>User Update</center></h1>

<form action="user_update_conn.php" method="post">
<table align="center">
<center><tr><th>USER ID:</th><td><input type="number" name="userid" autofocus required readonly value=<?php session_start(); $userid = $_SESSION['userid']; echo $userid; ?>></td></center>
<tr><td>Name:</td>
<td><input type="text" name="username" required autofocus></td></tr>
<tr><td>Address:</td>
<td><textarea type="text" name="address" required></textarea></td></tr>
<tr><td>Phone Number:</td>
<td><input type="text" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" required></td></tr>
<tr><td>Password:</td>
<td><input type="text" name="password" minlength="6" maxlength ="6" required autofocus></td></tr>

<!---<tr><td>Gender:</td>
<td><input type="radio" value="male"/>M
    <input type="radio" value="female"/>F</td></tr>-->
</table>
<center><input type="submit" value="UPDATE"></center>
</form>
</body>
</html>