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

    $pname= $_POST['pname'];
    $desc= $_POST['desc'];
    $stock= $_POST['stock'];
    $amount= $_POST['amount'];
    $image= $_POST['image'];
    
    $sql = "INSERT INTO pet(pname,`desc`,stock,amount, `image`)
    VALUES ('$pname', '$desc', '$stock', '$amount', '$image')";
    
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    
?>
<button><a href="admin_home.php">HOME</a></button>


    
