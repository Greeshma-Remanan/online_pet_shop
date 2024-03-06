<html><body>
<button><a href="../user/user_home_temp/user_homepage.php">HOME</a></button>
  <style>
    body{
        background-image: url("../image/bg4.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    </style></body></html>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "online_pet_shop";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $userid= $_POST['userid'];
    $pid= $_POST['pid'];
    $amount= $_POST['amount'];
    $qty= $_POST['qty'];
    $stock= $_POST['stock'];
    $total= $amount*$qty;
    date_default_timezone_set("Asia/Calcutta"); 
    $txt5=date('y-m-d H:i:s');
if($stock<$qty){
  die("Insufficient Stock");
}

    $sql = "INSERT INTO book (userid, `pid`, amount, qty, `total`,`date`)
    VALUES ('$userid', '$pid', '$amount', '$qty', '$total', '$txt5')";

    $sql1 = "UPDATE pet set stock=stock-'$qty' where pid='$pid'";
    
    
    if($con->query($sql) === TRUE) {
      
    if ($con->query($sql1) === TRUE) {
      echo "Booking successfully";
    } }else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    

?>
