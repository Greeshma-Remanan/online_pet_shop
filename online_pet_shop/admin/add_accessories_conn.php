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

    $accesname= $_POST['accesname'];
    $desc= $_POST['desc'];
    $stocks= $_POST['stocks'];
    $amount= $_POST['amount'];
    $image= $_POST['image'];
    
    $sql = "INSERT INTO accessories(accesname,`desc`,stocks,amount, `image`)
    VALUES ('$accesname', '$desc', '$stocks', '$amount', '$image')";
    
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    
?>
<button><a href="../admin/admin_home_temp/admin_homepage.php">HOME</a></button>


    
