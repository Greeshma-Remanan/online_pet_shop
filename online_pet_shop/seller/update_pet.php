
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<?php
$pid=$_GET['pid'];
?>
<form action="update_pet_conn.php" method="post" >
<h1><center>UPDATE PET</center></h1>
<table align="center" border="0">
<tr><td>Pet ID:</td>
<td><input type="text" name="pid" value="<?php echo $pid?>" readonly required autofocus/></td></tr>
<tr><td>Pet Name:</td>
<td><input type="text" name="pname" required /></td></tr>
<tr><td>Description</td>
<td><textarea type="text" name="desc"/></textarea></td></tr>
<tr><td>Stock Quantity</td>
<td><input type="text" name="stock" pattern="[0-9]+"/></td></tr>
<tr><td>Amount</td>
<td><input type="text" name="amount" pattern="[0-9]+"/></td></tr>
<tr><td></td>
<tr><td>Image:</td>
<td><input type="file" name="image"required autofocus /></td></tr>
</table>
<center><input type="submit" value="UPDATE" /></center>
</form>
<center><button><a  href="../seller/seller_home_temp/seller_homepage.php">HOME</a></button></center>
<!--<center><button><a  href="seller_home.php">HOME</a></button></center>-->
</body>
</html>