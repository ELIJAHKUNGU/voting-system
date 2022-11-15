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


include 'header.php'

?>

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


                        <form action="submitsms.php" method="POST" enctype="multipart/form-data">
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
                                    <label for="title">Phone Number</label>
                                    <input type="text" value='<?php echo $row['student-no'] ?>' class="form-control " name="phonenumber" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="title">Message</label>
                                    <textarea name="message" class="form-control"    cols="20" rows="3"><?php echo $row['student-name'] ?> You have been verified to vote on 18/12/2022 at post AB3454
                                    </textarea>
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