<?php
session_start();


if(!isset($_SESSION['studentinfo']) ){
    header("location:login.php");
}else{
    $studentinfo = $_SESSION["studentinfo"];
  
}
  $user_id =  $studentinfo ['student-id'];
 $username = $studentinfo ['student-name'];