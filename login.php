<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
if (isset($_POST["save"])) {
    require "db.php";
    extract($_POST);

    $sql = "select * from `students` where `student-email`='$student_email' and `student-regno`='$student_regno' LIMIT 1";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) == 1){
        //success
        $studentinfo = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["studentinfo"] = $studentinfo;
        header("location:index.php?success= logged in successfully ");
    }else{
        header("location:login.php?error=email or password is wrong");
    }
}
?>
<!-- ANCIENT APOLY -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/register.css">
		<link
			rel="stylesheet"
			href="./fontawesome-free-5.0.1/css/fontawesome-all.css"
		/>
</head>
<body>
	<div class="container">
    <form action="login.php" method="POST">
        <button class="btn btn-ghost">
            <img src="images/google.svg" alt="">
            Log In 
            <?php

if (isset($_GET['error'])) { ?>
  <p class="text-danger"><?php echo $_GET['error']; ?></p>
<?php } ?>

<?php if (isset($_GET['success'])) { ?>
  <p class="text-success"><?php echo $_GET['success']; ?></p>
<?php } ?>
        </button>
        <small>or</small>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="text" name="student_email" id="student_email" placeholder="Enter your email">

        </div>
        <div class="form-control">
            <label for="password">Student Registration Number</label>
            <input type="text" name="student_regno" id="student_regno" placeholder="Enter your student Registration ">
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <!-- <a href="">Forgot password</a> -->
        </div>
        <button class="btn" name="save">Log In</button>
        <small>Don't have an account ? <a href="">Sign up</a></small>
    </form>
    <div class="features">
        <img src="images/lap.svg" alt="">
    </div>
</div>
	</body>
</html>
