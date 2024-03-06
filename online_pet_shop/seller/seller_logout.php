<?php
    session_start();
  	unset($_SESSION['sid']);
  	unset($_SESSION['sellerrname']);
  	header('Location:../user/login1.php');
?>