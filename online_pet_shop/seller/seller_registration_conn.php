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

    $sellername= $_POST['sellername'];
    $address= $_POST['address'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $aadhar= $_POST['aadhar'];
    $password= $_POST['password'];
  


    $sql = "INSERT INTO seller (`sellername`, `address`, `email`, `mobile`, `aadhar`, `password`, `status`)
    VALUES ('$sellername', '$address', '$email', '$mobile', '$aadhar', '$password', '0')";
    
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    

?>
<button><a  href="../user/login1.php">LOGIN</a></button>