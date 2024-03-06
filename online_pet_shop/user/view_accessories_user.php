<html><body>
    <!--<form action="book_pet.php" method="POST">
    ITEM ID:<input type="text" name="pid" autofocus/>
    <input type="hidden" readonly value="<?php session_start(); $userid=$_SESSION['userid']; echo $userid;?>">
    <input type="submit" value="BOOK">
    <button><a href="user_home.php">HOME</a></button>-->
    <style>
     body{
        background-image: url("../image/viewwwpetadmin.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
</form>
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
    echo "<th>ACTION</th>";
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
        echo "<td>$" .$row["amount"]. "</td>";
        
        $pathx= "../image/";
        $file=$row["image"];
        echo "<td>";
        echo '<img src="'.$pathx.$file.'" height=100 width=100>';
        echo "</td>";
    
//echo "<td><a href=book_accessories.php?accid=".$row["accid"].">BOOK</a></td>";
echo "<td><a href=addcart.php?accid=".$row["accid"].">Add to Cart</a></td>";

        

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
<button><a href="../user/user_home_temp/user_homepage.php">HOME</a></button>