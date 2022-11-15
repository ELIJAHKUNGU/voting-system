<?php
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
    <title>Executive Hub CAR HIRES</title>

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
  <style>
    .col-sm-6{
      border-radius: 20px;
    }
    .btn{
      min-width: 240px;
    }
    form input{
      height: 40px;
      
    }
  </style>
  <body style="background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="text-center pt-5 mt-5">
          <h1 class="text-white" style="text-transform: uppercase;">Denal car hire </h1>
        </div>
       
        <div class="d-flex justify-content-center ">
          <div class="col-sm-6 shadow bg-light pt-5 mt-5 p-4 ">
            
            <section class="loginform ">
              <form action="">
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" name="" class="form-control" id="" />
                </div>
                <div class="form-group mt-3">
                  <label for="">Password</label>
                  <input type="text" name="" class="form-control" id="" />
                </div>
                <div class="d-flex justify-content-center">
                  <button class="btn btn-success text-white pl-5 pr-5 mt-4">Sign In</button>
                </div>
              </form>
            </section>
          </div>
        </div>
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
