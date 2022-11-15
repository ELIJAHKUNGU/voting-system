<?php
session_start();
require_once 'config.php';
include './header.php';


?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <span>Dashboard </span>
  </div>
  <?php

  if (isset($_GET['error'])) { ?>
    <p class="text-danger"><?php echo $_GET['error']; ?></p>
  <?php } ?>

  <?php if (isset($_GET['success'])) { ?>
    <p class="text-success"><?php echo $_GET['success']; ?></p>
  <?php } ?>

  <section class="dashboard-panel">
    <div class="row">
      <div class="col-sm-3 parked-fleet">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="d-flex ">
              <div class="col-xs-3  ">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">+</div>
                <div>Register Student</div>
              </div>
            </div>
          </div>
          <a href="./registerstudents.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="d-flex ">
              <div class="col-xs-3 ">
                <!-- <i class="fas fa-bars"></i> -->
                <i class="fa fa-bars fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php

                  require 'db.php';
                  $sql = "SELECT * FROM `students`  where `voting-status` = 1 and `graduate-status` = 0 and  `blacklist-account` = 0";
                  $result = mysqli_query($conn, $sql);
                  $results = mysqli_num_rows($result);
                  echo $results;


                  ?>
                </div>
                <div>Approved Students</div>
              </div>
            </div>
          </div>
          <a href="./pendingapprovals.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="d-flex ">
              <div class="col-xs-3 ">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php

                  require 'db.php';
                  $sql = "SELECT * FROM `students`  where `voting-status` = 0";
                  $result = mysqli_query($conn, $sql);
                  $results = mysqli_num_rows($result);
                  echo $results;


                  ?>

                </div>
                <div>Pending Approvals</div>
              </div>
            </div>
          </div>
          <a href="./pendingapprovals.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="d-flex ">
              <div class="col-xs-3 ">
                <i class="fa fa-stop-circle fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"></div>
                <div>Update Students Details</div>
              </div>
            </div>
          </div>
          <a href="./updateprofile.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="d-flex ">
              <div class="col-xs-3 ">
                <i class="fa fa-stop-circle fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">
                  <?php

                  require 'db.php';
                  $sql = "SELECT * FROM `students`  where `graduate-status` = 1";
                  $result = mysqli_query($conn, $sql);
                  $results = mysqli_num_rows($result);
                  echo $results;


                  ?>
                </div>
                <div>Graduate Students</div>
              </div>
            </div>
          </div>
          <a href="./graduate.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="d-flex ">
              <div class="col-xs -3">
                <!-- <i class="fab fa-contao"></i> -->
                <i class="fas fa-exclamation-triangle fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"></div>
                <div>Delete Students</div>
              </div>
            </div>
          </div>
          <a href="./deletestudents.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="d-flex ">
              <div class="col-xs -3">
                <i class="fa fa-history fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"></div>
                <div>SMS CENTER</div>
              </div>
            </div>
          </div>
          <a href="./smscenter.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>

    </div>


    </div>
  </section>
</main>
</div>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="./dashboard/dashboard.js"></script>
</body>

</html>