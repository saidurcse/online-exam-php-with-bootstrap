<?php

session_start();
  
ob_start();

if(isset($_SESSION['name']))

 echo  "Welcome..." . $_SESSION['name'];

else

 header("location:studentlogin.php"); 

 ?>
