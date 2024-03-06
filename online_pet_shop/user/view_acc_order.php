<html>
    <body align="top_left">
<button><a href="../user/user_home_temp/user_homepage.php">HOME</a></button>
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
    echo "<caption><mark> ACCESSORIES ORDER</mark></caption>";
    
    echo "<tr>";
    echo "<th>ORDER ID</th>";
    echo "<th>USER ID</th>";
    echo "<th>ITEM ID</th>";
    echo "<th>AMOUNT</th>";
    echo "<th>QUANTITY</th>";
    echo "<th>TOTAL</th>";
    echo "</tr>";

    session_start(); $userid=$_SESSION['userid']; 

    $result = mysqli_query($con,"SELECT * FROM book_accessories where user_id=$userid");

    if (mysqli_num_rows($result) > 0) {
        
   
        
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .$row["book_id"]. "</td>";
        echo "<td>" .$row["user_id"]. "</td>";
        echo "<td>" .$row["accid"]. "</td>";
        echo "<td>" .$row["amount"]. "</td>";
        echo "<td>" .$row["qty"]. "</td>";
        echo "<td>" .$row["total"]. "</td>";
      
        echo "</tr>";
    $i++;
    }
    //echo"</table>";
    }
    else{
    echo "No result found";
    }

    $con->close();
    ?>
    </table>