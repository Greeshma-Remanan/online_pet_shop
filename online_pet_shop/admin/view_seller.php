
<html><body>
   <!-- <a href=update_pet.php>UPDATE</a>
    <a href=delete_pet.php>DELETE</a> -->
   <!-- <button><a href=admin_home.php>HOME</a></button>-->
    <center><button><a href="../admin/admin_home_temp/admin_homepage.php">HOME</a></button></center>
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

    $result = mysqli_query($con,"SELECT * FROM seller");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["sid"]. "</td>";
        echo "<td>" .$row["sellername"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["mobile"]. "</td>";
        echo "<td>" .$row["aadhar"]. "</td>";
       // echo "<td>" .$row["status"]. "</td>";
       if($row["status"]!=0){
        echo "<td>approved</td>";
       }
else{
    echo "<td><a href=approve_seller.php?sid=$row[sid]>approve</a></td>";
}
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
    </table>
