<?php
    session_start();
  	unset($_SESSION['userid']);
  	unset($_SESSION['username']);
  	header('Location: ../user/login1.php');
?>