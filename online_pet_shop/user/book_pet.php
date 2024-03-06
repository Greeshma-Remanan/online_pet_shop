<html><body>
<style>
    body{
        background-image: url("../image/viewwwpetadmin.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
<?php
$conn=mysqli_connect("localhost", "root", "", "online_pet_shop");

if(!$conn)
{
    die("Error: Failed to connect to database!");
}
$pid=$_GET['pid'];
$query=mysqli_query($conn,"SELECT * FROM `pet`where pid=$pid");

session_start(); $userid=$_SESSION['userid']; 
//echo $item_id;
echo "<table align=center>";
while($row= mysqli_fetch_array($query)){
    echo "<tr><th>Pet ID</th><td style='border: solid 1px black;'>".$row['pid']."</td></tr>";
    $pid=$row['pid'];
    echo "<tr><th>NAME</th><td style='border: solid 1px black;'>".$row['pname']."</td></tr>";
    echo "<tr><th>DESCRIPTION</th><td style='border: solid 1px black;'>".$row['desc']."</td></tr>";
    echo "<tr><th>ADVANCE AMOUNT</th><td style='border: solid 1px black;'>"."$".$row['amount']."</td></tr>";
    $amount=$row['amount'];
    echo "<tr><th>STOCK</th><td style='border: solid 1px black;'>".$row['stock'] ."</td></tr><tr><th>IMAGE</th><td>";
    $stock=$row['stock'];

            $pathx = "../image/";
            $file = $row["image"];
            echo "<tdstyle='border: solid 1px black;>";
            echo '<img src="'.$pathx.$file.'" height=100 width=100>';
            echo "</td></tr>";

            }           
echo "</table>";

?>

<!DOCTYPE HTML>
<html>
<head>
 <title>BOOKING</title>
</head>
 <body>
<div>
     <form action="booking_conn.php" method="post">  
     <input type="hidden" readonly name="userid" value="<?php echo $userid;?>"><br>
     <input type="hidden" readonly name="pid" value="<?php echo $pid;?>"><br>
     <input type="hidden" readonly name="amount" value="<?php echo $amount;?>"><br>
     <input type="hidden" readonly name="stock" value="<?php echo $stock;?>"><br>
         Quantity:<input type="text"name="qty"required><br><br><br>
         <input type="submit" value="BOOK">
         <button><a href="view_pet_user.php">CANCEL</a></button>
         <button><a href="../user/user_home_temp/user_homepage.php">GO TO HOME</a></button>
    </form>
     
</div>     
</body>
</html>