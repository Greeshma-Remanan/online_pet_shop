<?php
    $userid= $_POST['userid'];
    $accid= $_POST['accid'];
    $amount= $_POST['amount'];
    $qty= $_POST['qty'];
    $stocks= $_POST['stocks'];
?>
<html>
<button><a href="../user/user_home_temp/user_homepage.php">HOME</a></button>
<body>
<form action="booking_acc_conn.php" method="post">


<center><table align="center" border="1" bgcolor="LightGoldenRodYellow">

<input type="hidden"name="userid" required readonly min="1" value=<?php echo $userid ?>>
<input type="hidden"name="accid" required readonly min="1" value=<<?php echo $accid ?>>
<input type="hidden"name="amount" required readonly min="1" value=<?php echo $amount ?>>
<input type="hidden"name="qty" required readonly min="1" value=<?php echo $qty ?>>
<input type="hidden"name="stocks" required readonly min="1" value=<?php echo $stocks ?>>
<?php

$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_pet_shop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$sql= "SELECT * from accessories where accid ='$accid';";
    $result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    $stocks= $row['stocks'];
    }
if($stocks<$qty){
  die("Insufficient Stock");
}


?>
<center><h1>PAYMENT</h1></center>
<tr><th>Total Amount </th></tr>
  <td><input type="text"name="Total  Amount" class="a4" required readonly min="1" value=<?php echo $total= $amount*$qty; ?>></td>
<tr><th>Card Type:</th><td>
  <select name="card_type" class="a4" required>
    <option value="" selected="selected" disabled="disabled">Select your Card Type</option>
      <option>Debit Card</option>
      <option>Credit Card</option>
  </select></td></tr>

  <input type="hidden" name="accid" value="<?php echo $accid ?>">
  
       <tr><th>Card Name:</th>
       <td><input type="text"name="card_name" class="a4" required pattern="[A-Za-z_]+"></td></tr>

       <tr><th>Card Number:</th>
       <td><input type="password"name="card" class="a4" required pattern="[0-9]+"  minlength="16" maxlength="16" title="Invalid - 16 Digits Only" placeholder="xxxx-xxxx-xxxx-xxxx"></td></tr>
       <tr><th>Expiry(MM/YY):</th>
       <td><input type="month"name="valid" class="a4"class="a4" required  min="2022-07" max="2030-12" value="2022-07"></td></tr>

       <tr><th>CVV:</th>
       <td><input type="password"name="cvv" class="a4" required pattern="[0-9]+"  minlength="3" maxlength="3" title="Enter 3 Digit Number"placeholder="xxx"></td></tr>
      </tr>
</table></cenetr>
       <br> <input type="submit"class="a7" value="PAY">  </center>
</form>
<button><a  href="user_home_temp/user_homepage.php">HOME</a></button>
</body>
</html>