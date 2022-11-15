<?php

session_start();
require_once 'config.php';
include 'header.php';



?>

            <div class="col-sm-8 mt-5">
            <?php

if (isset($_GET['error'])) { ?>
  <p class="text-danger"><?php echo $_GET['error']; ?></p>
<?php } ?>

<?php if (isset($_GET['success'])) { ?>
  <p class="text-success"><?php echo $_GET['success']; ?></p>
<?php } ?>
                <div class="row">
                    <div class="col-sm-4 Home shadow">
                        <a href="./index.php">
                            <div class="p-5">
                                <div class="d-flex justify-content-center ">
                                    <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                    <h4 class="ml-4 mt-3 pl-5">Dashboard</h4>

                                </div>

                            </div>
                        </a>

                    </div>
                    <div class="col-sm-4 Application shadow">
                        <a href="feestatemnt">
                            <div class="p-5">
                                <div class="d-flex justify-content-center ">
                                    <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                    <h4 class="ml-4 mt-3 pl-5">Fees statement</h4>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-sm-4 MY shadow">
                        <a href="./profile.php">
                            <div class="p-5">
                                <div class="d-flex justify-content-center ">
                                    <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                    <h4 class="ml-4 mt-3 pl-5">Profile </h4>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-sm-4 Profile shadow">
                        <div class="p-5">
                            <div class="d-flex justify-content-center ">
                                <a href="./statusprofile.php">
                                    <img src="./assets/feather/home.svg" class="m" alt="" srcset="">
                                    <h4 class="ml-4 mt-3 pl-5"> Status Profile</h4>
                                </a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>


            <!-- Button trigger modal -->


            <!-- Modal -->

        </div>

    </div>

    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/popper.min.js"></script>


    <!-- <script src="./js/dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>