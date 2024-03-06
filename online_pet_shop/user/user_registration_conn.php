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

    $username= $_POST['username'];
    $address= $_POST['address'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password= $_POST['password'];


    $sql = "INSERT INTO user (username, `address`, email, mobile, `password`)
    VALUES ('$username', '$address', '$email', '$mobile', '$password')";
    
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    

?>
<button><a  href="login1.php">LOGIN</a></button>