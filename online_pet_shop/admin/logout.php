<?php
    session_start();
  	unset($_SESSION['adminname']);
  	unset($_SESSION['passcode']);
  	header('Location:../user/login1.php');
?>