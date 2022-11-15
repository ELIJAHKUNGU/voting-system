<?php
session_start();
require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="ELIJAH KUNGU " />
    <meta name="generator" content="Hugo 0.84.0" />
    <title>CHAGUO VOTING SYSTEM HOME PAGE</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/dashboard/"
    />
    <link rel="stylesheet" href="./css/all.min.css" />

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="./dashboard/dashboard.css" rel="stylesheet" />
  </head>
  <body>
    <header
      class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" style="text-transform: uppercase;" href="#"
        >CHAGUO  SYSTEM </a
      >
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="w-100 text-white mx-2" style="text-transform: uppercase;" >CHAGUO VOTING SYSTEM </div>

      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <div class="d-flex text-white px-3">
            <h6 class="nav-link px-3 text-white">Welcome Mercy Wanjiru</h6>
            <a class="nav-link text-white" href="#">Sign out</a>
          </div>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="./index.php">
                          <span data-feather="home"></span>
                          Dashboard
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./registerstudents.php">
                          <i class="fa fa-users "></i>
                          Add Students
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./approvedstudents.php">
                          <span data-feather="users"></span>
                          Approved voters
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./pendingapprovals.php">
                          <span data-feather="users"></span>
                          Pending Approval

                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./updateprofile.php">
                          <span data-feather="file"></span>


                          Update user Profile
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./graduate.php">
                          <span data-feather="layers"></span>
                         Graduate students
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./deletestudents.php">
                          <span data-feather="layers"></span>
                          Delete Students
                      </a>
                  </li>
              </ul>

              <h6
                  class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>In House</span>
                  <a class="link-secondary" href="#" aria-label="Add a new report">
                      <span data-feather="plus-circle"></span>
                  </a>
              </h6>
              <ul class="nav flex-column mb-2">

                  <li class="nav-item">
                      <a class="nav-link" href="./smscenter.php">
                          <i class="menu-icon fa fa-envelope"></i>
                          Sms Center
                      </a>
                  </li>

                  
              </ul>
          </div>
      </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <span>Register Students </span>
          </div>
          <div class="">
            <div class="col-sm-8">

<?php
    // require_once 'db.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (isset($_POST["save"])) {
        $conn = mysqli_connect("localhost","root","","chaguo");
        extract($_POST);
        $email = $_POST['student_email'];
        $sql2 = "SELECT * FROM `students` where `student-email` = '$email'";
        $result = mysqli_query($conn,$sql2);

    if (mysqli_num_rows($result) > 0){
      
      echo '<p class="text-danger">Error=Email address already exists</p>';
       
    }else{
        $sql = "INSERT INTO `students`(`student-id`, `student-name`, `student-email`, `student-no`, `student-regno`, `student-course`, `student-join`, `student-graduate`, `graduate-status`, `voting-status`, `blacklist-account`)
        VALUES (null,'$student_name','$student_email','$student_no','$student_regno','$student_course','$student_join','$student_graduate',0,0,0)";
        $result2 =  mysqli_query($conn, $sql);
        if ($result2){
          
            echo '<p class="text-success">success=Your account has been  successfully created login</p>';
            exit();
        }else{
          echo '<p class="text-danger">Error=Unknown error occurred</p>';

            }
          }
    }
    ?>




                <form action="" method="post">
                    <div class="form-group mt-4">
                        <label for="">Student Name</label>
                        <input type="text" name="student_name" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Student Email Address</label>
                        <input type="email" name="student_email" class="form-control" placeholder="johndoe@gmail.com">
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Student Phone Number</label>
                        <input type="text"name="student_no"  class="form-control" placeholder="254743770216">
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Student Registration Number</label>
                        <input type="text"name="student_regno"  class="form-control" placeholder="scc200-450/2018">
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Course</label>
                        <input type="text" name="student_course" class="form-control" placeholder="Computer science">
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Year of Join school</label>
                        <input type="date" name="student_join" class="form-control" >
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Expected Graduation Year</label>
                        <input type="date" name="student_graduate" class="form-control" >
                    </div>

                    <div class="d-flex justify-content-center mt-2">
                        <button name='save' class="btn btn-success">Register Student</button>
                    </div>

                </form>
            </div>

          </div>

          
          
              
          </div>    
          </section>
        </main>
      </div>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
      integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
      crossorigin="anonymous"
    ></script>
    <script src="./dashboard/dashboard.js"></script>
  </body>
</html>
