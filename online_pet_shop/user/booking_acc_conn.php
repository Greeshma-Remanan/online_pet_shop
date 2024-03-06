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
   echo  $txt7=filter_input(INPUT_POST, 'accid');
  echo   $userid=$_POST['userid'];
  echo   $amount=$_POST['amount'];
   echo  $qty=$_POST['qty'];
   $sql= "SELECT * from accessories where accid ='$txt7';";
   $result=mysqli_query($dbname, $sql);
    while($row = mysqli_fetch_assoc($result)){
   echo $stocks= $row['stocks'];
    }
if($stocks<$qty){
  die("Insufficient Stock");
}
$total= $amount*$qty;

   /* 

    $sql = "INSERT INTO book_accessories (`user_id`, `accid`, amount, qty, `total`)
    VALUES ('$userid', '$accid', '$amount', '$qty', '$total')";

    $sql1 = "UPDATE accessories set stocks=stocks-'$qty' where accid='$accid'";
    
    
    if($con->query($sql) === TRUE) {
      
    if ($con->query($sql1) === TRUE) {
     // echo "Payment successfully";
    } }else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();*/
    

?>
