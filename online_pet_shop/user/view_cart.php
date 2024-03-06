<!DOCTYPE html>
<html>
<head>
    <title><?php session_start(); echo "CART | "; echo $_SESSION['user'];;?></title>
</head>
<body>

<center><h1>CART</h1></center>

<br>


<table align="center" border="1" bgcolor="LightGoldenRodYellow">
<?php
 $u=$_SESSION['userid'];

$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_pet_shop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}
        $sql = "SELECT * from addcart where userid=$u";
        $result=mysqli_query($conn, $sql);
      // $resultCheck = mysqli_num_rows($result);
       
      // if($resultCheck > 0){
        echo "<tr>";
        echo "<th>ACCESSORIES ID</th>";
        echo "<th>ACCESSORIES NAME</th>";
        echo "<th>DESCRIPTION</th>";
        echo "<th>STOCKS</th>";
        echo "<th>AMOUNT</th>";
        echo "<th>IMAGE</th>";
        echo "</tr>";
        
           while ($row = mysqli_fetch_assoc($result)) {
             echo $accid=$row['accid'];
             $result1 = mysqli_query($conn,"SELECT * FROM accessories where accid=$accid");

    if (mysqli_num_rows($result1) > 0) {
  
    while($row1 = mysqli_fetch_array($result1)) {
        echo "<tr>";
        echo "<td>" .$row1["accid"]. "</td>";
        echo "<td>" .$row1["accesname"]. "</td>";
        echo "<td>" .$row1["desc"]. "</td>";
        echo "<td>" .$row1["stocks"]. "</td>";
        echo "<td>" .$row1["amount"]. "</td>";
        echo "<td>" .$row1["image"]. "</td>";
        
        $pathx= "../image/";
        
        $file=$row1["image"];
        echo "<td>";
        echo '<img src="'.$pathx.$file.'" height=100 width=100>';
        echo "</td></tr>";
echo "<td><a href=book_accessories.php?accid=".$row["accid"].">BUY NOW</a></td>";
echo "<td><a href=removecart.php?accid=".$row["accid"].">REMOVE</a></td>";

        
      }
                            }}
             
    
        ?>

</table>
<button><a  href="user_home_temp/user_homepage.php">HOME</a></button>
</body>
</html>