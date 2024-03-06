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

<body>
<h1><center>LOGIN</center></h1>

<form action="login_conn.php" method="post">
<table align="center">
<tr>
<td>Email:</td>
<td><input type="text" name="email"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" /></td>
</tr>
<tr><td><input type="submit" value="Login"/></td>
</table>
<center><a href="user_registration.php">Sign Up</a></center>
<center><a href="forgot_pass.php">Forgott Password?</center>
<button><a href="../index/index.php">HOME</button>
</form>

</body>
</html>