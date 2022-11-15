<?php
// require_once 'config.php';

if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    require 'db.php';
    $sql="DELETE FROM `students`  WHERE  `student-id`= $id";
    mysqli_query($conn,$sql);
    header("location:deletestudents.php");
    if ($conn->query($sql) === TRUE) {

        header("location:deletestudents.php?success= Student profile have been deleted successfully ");
    
    } else {
        header("location:deletestudents.php?error= Student profile was not deleted  +2547  220 000");
    
    
    }
    
    $conn->close();
}










?>