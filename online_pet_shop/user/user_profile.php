<html><body>
<input type="hidden" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid; ?>">
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
    echo "<th>USER ID</th>";
    echo "<th>USER NAME</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>EMAIL</th>";
    echo "<th>MOBILE</th>";



    echo "</tr>";

    $result = mysqli_query($con,"SELECT * FROM user where userid=$userid");

    if (mysqli_num_rows($result) > 0) {
  
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["userid"]. "</td>";
        echo "<td>" .$row["username"]. "</td>";
        echo "<td>" .$row["address"]. "</td>";
        echo "<td>" .$row["email"]. "</td>";
        echo "<td>" .$row["mobile"]. "</td>";
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
<center><button><a href="../user/user_update_profiletemp/user_updateprofile_new.php">UPDATE PROFILE</a></button></center>
<center><button><a href="user_delete.php">DELETE PROFILE</a></button></center>
<center><button><a href="../user/user_home_temp/user_homepage.php">HOME</a></button></center>
