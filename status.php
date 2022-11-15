<?php
include './header.php';
session_start();

require_once 'config.php';
$id =  $studentinfo['student-id'];
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <span>Status Update</span>
    </div>



    <div class="shadow">
        <div class=" ">
            <h2 class=" text-center  font-weight-bold" style="font-size: 25px">

            </h2>
        </div>
        <div class="card-body">


            <!-- <form action="update.php" method="POST" enctype="multipart/form-data"> -->



            <div class="">

                <div class="form-group mt-2">
                    <label for="">Voting Status</label>
                    <br>
                    <br>
                    <?php

                    require 'db.php';
                    $sql = "SELECT * FROM `students` WHERE  `student-id` = $id and `voting-status` = 1 and `blacklist-account` = 0  and `graduate-status` = 0 ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    if ($row > 0) {
                        echo '<p class="text-danger">You are eligible to vote</p> ';
                        # code...
                    }else  { 
                        echo '<p class="text-success">You are not eligible to vote</p> ';
                    }

                    // UPDATE `students` SET `student-id`='[value-1]',`student-name`='[value-2]',`student-email`='[value-3]',
                    // `student-no`='[value-4]',`student-regno`='[value-5]',`student-course`='[value-6]',`student-join`='[value-7]',
                    // `student-graduate`='[value-8]',`graduate-status`='[value-9]',`voting-status`='[value-10]',`blacklist-account`='[value-11]'
                    //  WHERE 1

                    ?>
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