<style>
     body{
        background-image: url("../image/viewwwpetadmin.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
</style>
<table align="center" border="1" bgcolor="">
    <?php
        if(($_SERVER["REQUEST_METHOD"] == "GET"))
        {
$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_pet_shop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}
      $txt=$_GET['choice'];
        $sql = "SELECT * from pet where types='$txt'";
        $result=mysqli_query($conn, $sql);
       $resultCheck = mysqli_num_rows($result);
       
       if($resultCheck > 0){
        echo "<tr>";
        echo "<th>PET ID</th>";
        echo "<th>NAME</th>";
        echo "<th>TYPES</th>";
        echo "<th>DESCRIPTION</th>";
        echo "<th>ADVANCE AMOUNT</th>";
        echo "<th>STOCK</th>";
        echo "<th>IMAGE</th>";
        echo "<th>VIEW</th>";
        echo "</tr>";
        
           while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['pid'] ."</td>";
            echo "<td>".$row['pname'] ."</td>";
            echo "<td>".$row['types'] ."</td>";
            echo "<td>".$row['desc'] ."</td>";
            echo "<td>$".$row['amount'] ."</td>";
            echo "<td>".$row['stock'] ."</td>";
            $pathx = "../image/";
            $file = $row["image"];
            echo "<td>";
            echo '<img src="'.$pathx.$file.'" height=100 width=100>';
            echo "</td>";
            echo "<td><a href=book_pet.php?pid=".$row['pid']. "><button>BOOK</button></a></td>";
           // echo "<td><a href=addcart.php?pid=".$row['pid']. "><button>ADD TO CART</button></a></td></tr>";
            }
        }
    }
        ?>
        </table>