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
    $types=$_POST['types'];
    
    $sql = "INSERT INTO pet(pname,`desc`,types,stock,amount, `image`)
    VALUES ('$pname', '$desc','$types', '$stock', '$amount', '$image')";
    
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
    
?>
<button><a href="../seller/seller_home_temp/seller_homepage.php">HOME</a></button>
<!--<button><a href="../seller/seller_home_temp/seller_homepage.php">HOME</a></button>-->


    
