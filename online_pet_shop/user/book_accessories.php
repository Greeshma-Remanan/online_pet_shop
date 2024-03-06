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
$accid=$_GET['accid'];
$query=mysqli_query($conn,"SELECT * FROM `accessories`where accid=$accid");

session_start(); $userid=$_SESSION['userid']; 
//echo $item_id;
echo "<table align=center>";
while($row= mysqli_fetch_array($query)){
    echo "<tr><th>ACCESSORIES ID</th><td style='border: solid 1px black;'>".$row['accid']."</td></tr>";
    $pid=$row['accid'];
    echo "<tr><th>NAME</th><td style='border: solid 1px black;'>".$row['accesname']."</td></tr>";
    echo "<tr><th>DESCRIPTION</th><td style='border: solid 1px black;'>".$row['desc']."</td></tr>";
    echo "<tr><th>AMOUNT</th><td style='border: solid 1px black;'>"."$".$row['amount']."</td></tr>";
    $amount=$row['amount'];
    echo "<tr><th>STOCK</th><td style='border: solid 1px black;'>".$row['stocks'] ."</td></tr><tr><th>IMAGE</th><td>";
    $stocks=$row['stocks'];

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
     <form action="payment.php" method="post">  
     <input type="hidden" readonly name="userid" value="<?php echo $userid;?>"><br>
     <input type="hidden" readonly name="accid" value="<?php echo $accid;?>"><br>
     <input type="hidden" readonly name="amount" value="<?php echo $amount;?>"><br>
     <input type="hidden" readonly name="stocks" value="<?php echo $stocks;?>"><br>
         Quantity:<input type="text"name="qty"required><br><br><br>
         
         <input type="submit" value="BUY">
         <button><a href="view_accessories_user.php">CANCEL</a></button>
         <button><a href="user_home_temp/user_homepage.php">GO TO HOME</a></button>
    </form>
     
</div>     
</body>
</html>