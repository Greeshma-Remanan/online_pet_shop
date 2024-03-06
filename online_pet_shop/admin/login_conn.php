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

    $adminname= $_POST['adminname'];
    $passcode= $_POST['passcode'];

    $sql = "SELECT * FROM admin WHERE adminname = '$adminname' and `passcode` = '$passcode'";
    $result = mysqli_query($con,$sql);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
        header("location:admin_home.php");
    }
    else {
       echo "failed";
    }

    $con->close();
    ?>
