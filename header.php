<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
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
                    <h6 class="nav-link px-3 text-white">Welcome
                        <?php
                        $username = $info['username'];
                        echo $username;

                        ?>
                    </h6>
                    <a class="nav-link text-white" href="./logout.php">Sign out</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-4 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span> Dashboard
                            </a>
                        </li>
                        <hr>

                        <li class="nav-item ">
                            <a class="nav-link" href="./profile.php">
                                <img src="./assets/feather/file.svg" alt="" srcset=""> Profile Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./feesstatemnt.php">
                                <img src="./assets/feather/file-text.svg" alt="" srcset=""> Fees statement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./status.php">
                                <img src="./assets/feather/book-open.svg" alt="" srcset="">check voting status
                            </a>
                        </li>


                    </ul>


                </div>
            </nav>