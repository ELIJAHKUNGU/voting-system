<?php
session_start();
require_once 'config.php';



if (isset($_GET["id"])) {
    $id = $_GET["id"];
    require 'db.php';
    $sql = "SELECT * FROM `students` WHERE  `student-id` = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}
// SELECT `student-id`, `student-name`, `student-email`, `student-no`, `student-regno`, `student-course`, `student-join`, `student-graduate`,
//  `graduate-status`, `voting-status`, `blacklist-account` FROM `students` WHERE 1


error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["save"])) {
    $conn = mysqli_connect("localhost", "root", "", "chaguo");
    extract($_POST);

    $sql = "UPDATE `students` SET `voting-status`='$voting_status' WHERE `student-id` = '$id'";
    if ($conn->query($sql) === TRUE) {

        header("location:pendingapprovals.php?success= Student Profile have been   updated successfully ");
    } else {
        header("location:pendingapprovals.php?error=Your Student Profile was not   updated  +2547  220 000");
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <a href="./index.php"></a>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="ELIJAH KUNGU " />
    <meta name="generator" content="Hugo 0.84.0" />
    <title>CHAGUO VOTING SYSTEM HOME PAGE</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />
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
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" style="text-transform: uppercase;" href="#">CHAGUO SYSTEM </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="w-100 text-white mx-2" style="text-transform: uppercase;">CHAGUO VOTING SYSTEM </div>

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
                            <a class="nav-link" href="./deletestudents.php">
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

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>In House</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="menu-icon fa fa-envelope"></i>
                                Sms Center
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Report
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <span>Pending Approvals </span>
                </div>



                <div class="shadow">
                    <div class=" ">
                        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">

                        </h2>
                    </div>
                    <div class="card-body">


                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="p-5">
                                <div class="form-group mt-2">
                                    <label for="title">Student ID</label>
                                    <input type="hidden" placeholder="" value="<?php echo $id; ?>" class="form-control " name="student-id" required>

                                    <input type="hidden" placeholder="" value="<?php echo $id; ?>" class="form-control " name="student-id" required>
                                    <input type="text" placeholder="" value="<?php echo '#jkuat-00' . $id; ?>" class="form-control " required>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="title">Full Name</label>
                                    <input type="text" value='<?php echo $row['student-name'] ?>' class="form-control " name="name" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="title">Voting status</label>
                                    <select name="voting_status" id="" class="form-control" required>


                                        <option value="1">Approve Account</option>
                                        <option value="2">Disapprove Account</option>
                                    </select>
                                </div>
                                <div class="d-flex">
                                    <button style="text-transform: uppercase;" name="save" class="btn btn-success  mr-3 mt-3 ">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>


                </div>
        </div>

    </div>




    </div>
    </section>
    </main>

    </div>


    </div>
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="./dashboard/dashboard.js"></script>
</body>

</html>