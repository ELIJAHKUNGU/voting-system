<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["save"])) {
    $conn=mysqli_connect("localhost","root","","chaguo");
    extract($_POST);

 $sql = "UPDATE `students` SET `student-name`='$student_name',`student-email`='$student_email',
 `student-no`='$student_no',`student-regno`='$student_regno',`student-course`='$student_course',
 `graduate-status`='$graduate_status',`voting-status`='$voting_status',`blacklist-account`='$blacklist_account'
 WHERE `student-id` = '$student_id'";
 if ($conn->query($sql) === TRUE) {

    header("location:updateprofile.php?success= Student Profile have been   updated successfully ");

} else {
    header("location:updateprofile.php?error=Your Student Profile was not   updated  +2547  220 000");


}

$conn->close();

 


}
?>