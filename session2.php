<?php

session_start();
  
if(isset($_SESSION['name']))

 echo  "Welcome..." . $_SESSION['name'];

else

 header("location:studentlogin.php"); 

$student_id= $_SESSION['student_id'];

 ?>
