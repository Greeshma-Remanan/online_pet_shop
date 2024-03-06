<html><body>
<input type="hidden" readonly value="<?php session_start(); $sid=$_SESSION['sid']; echo $sid; ?>">
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

   // echo "<table>";
    echo "<tr>";
    echo "<th>SELLER ID</th>";
    echo "<th>SELLER NAME</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>EMAIL</th>";
    echo "<th>MOBILE</th>";
    echo "<th>AADHAR</th>";



    echo "</tr>";
    

     $sql = mysqli_query($con,"SELECT * FROM seller where `sid`=$sid");
    
    // $row = mysqli_fetch_array($result);  
    //  $count = mysqli_num_rows($result); 
    //  $sql = "SELECT *from seller where `sid` = $sid";  
    //  $result = mysqli_query($con, $sql);  
     $row = mysqli_fetch_array($sql);  
     $count = mysqli_num_rows($sql); 


    if ($count > 0) {
  
    // $i=0;
    // while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["sid"]. "</td>";
        echo "<td>" .$row["sellername"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["mobile"]. "</td>";
        echo "<td>" .$row["aadhar"]. "</td>";
        echo "</tr>";

    // $i++;
   // echo "</table>";
    }

   
    else{ 
    echo "No result found.........";
    }

    $con->close();
   // echo $sid;
   //echo"sid";
    ?>
    <table align="center" border="1" bgcolor="">
    
<center><button><a href="../seller/seller_update_profiletemp/seller_updateprofile_new.php">UPDATE PROFILE</a></button></center>
<center><button><a href="seller_delete.php">DELETE PROFILE</a></button></center>
<center><button><a  href="../seller/seller_home_temp/seller_homepage.php">HOME</a></button></center>
