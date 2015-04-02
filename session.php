<?php

session_start();

if(isset($_SESSION['admin_id']))

 echo " " . $_SESSION['admin_id'];

else

header("location:adminlogin.php"); 

 ?>