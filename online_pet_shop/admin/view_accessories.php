<html><body>
   <!-- <a href=update_pet.php>UPDATE</a>
    <a href=delete_pet.php>DELETE</a> -->
   <!-- <button><a href=admin_home.php>HOME</a></button>-->
    <button><a href="../admin/admin_home_temp/admin_homepage.php">HOME</a></button>
    <style>
    body{
        background-image: url("../image/viewwwpetadmin.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</body></html>
<table align="center" border="1" bgcolor="">
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

    //echo "<table>";
    echo "<tr>";
    echo "<th>ACCESSORIES ID</th>";
    echo "<th> NAME</th>";
    echo "<th>DESCRIPTION</th>";
    echo "<th>STOCK</th>";
    echo "<th>AMOUNT</th>";
    echo "<th>IMAGE</th>";


    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM accessories");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["accid"]. "</td>";
        echo "<td>" .$row["accesname"]. "</td>";
        echo "<td>" .$row["desc"]. "</td>";
        echo "<td>" .$row["stocks"]. "</td>";
        echo "<td>" .$row["amount"]. "</td>";
        //echo "<td>" .$row["image"]. "</td>";
        $pathx= "../image/";
        $file=$row["image"];
        echo "<td>";
        echo '<img src="'.$pathx.$file.'" height=100 width=100>';
        echo "</td>";

echo "<td><a href=admin_updateaccess_temp/admin_updateaccess_temp.php?accid=".$row["accid"].">UPDATE</a></td>";

echo "<td><a href=delete_accessories.php?accid=".$row["accid"].">DELETE</a></td>";

        
        echo "</tr>";

    $i++;
    }
//echo "</table>";
    }
    else{
    echo "No result found";
    }

    $con->close();
    ?>
    <table align="center" border="1" bgcolor="">
