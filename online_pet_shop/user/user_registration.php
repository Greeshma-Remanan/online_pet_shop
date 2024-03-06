<html>
<head>
<title>Untitled Document</title>
<style>
    body{
        background-image: url("../image/5514209.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</head>

<body>
<h1><center>User Registration</center></h1>

<form action="user_registration_conn.php" method="post">
<table align="center">
<tr><td>Name:</td>
<td><input type="text" name="username" required autofocus></td></tr>
<tr><td>Address:</td>
<td><textarea type="text" name="address" required></textarea></td></tr>
<tr><td>Email:</td>
<td><input type="email" name="email" required></td></tr>
<tr><td>Phone Number:</td>
<td><input type="text" name="mobile" pattern="[0-9]+" maxlength="10" minlength="10" required></td></tr>
<tr><td>Password:</td>
<td><input type="text" name="password" minlength="6" maxlength="6" required autofocus></td></tr>

<!---<tr><td>Gender:</td>
<td><input type="radio" value="male"/>M
    <input type="radio" value="female"/>F</td></tr>-->
</table>
<center><input type="submit" value="Register"></center>
</form>
<center>
<a href="login.php">Login</a></center>
</body>
</html>