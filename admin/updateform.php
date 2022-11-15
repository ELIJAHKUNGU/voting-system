<?php
session_start();

require_once 'config.php';
include 'header.php';


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    require 'db.php';
    $sql = "SELECT * FROM `students` WHERE  `student-id` = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}
// UPDATE `students` SET `student-id`='[value-1]',`student-name`='[value-2]',`student-email`='[value-3]',
// `student-no`='[value-4]',`student-regno`='[value-5]',`student-course`='[value-6]',`student-join`='[value-7]',
// `student-graduate`='[value-8]',`graduate-status`='[value-9]',`voting-status`='[value-10]',`blacklist-account`='[value-11]'
//  WHERE 1


?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <span>Update Student Details</span>
    </div>



    <div class="shadow">
    <div class=" ">
        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">

        </h2>
    </div>
    <div class="card-body">


        <form action="update.php" method="POST" enctype="multipart/form-data">



            <div class="p-5">
                <div class="form-group mt-2">
                    <label for="title">Student ID</label>
                    <input type="hidden" placeholder="" value="<?php echo $id; ?>" class="form-control " name="student_id" required>

                    <input type="hidden" placeholder="" value="<?php echo $id; ?>" class="form-control " name="student_id" required>
                    <input type="text" placeholder="" value="<?php echo '#jkuat-00' . $id; ?>" class="form-control " required>
                </div>
                
                <!-- // SELECT `student-id`, `student-name`, `student-email`, `student-no`, `student-regno`, `student-course`, `student-join`, `student-graduate`,
//  `graduate-status`, `voting-status`, `blacklist-account` FROM `students` WHERE 1 -->

                <div class="form-group mt-2">
                    <label for="title">Student Name</label>
                    <input type="text" value='<?php echo $row['student-name'] ?>' class="form-control " name="student_name" required>
                </div>
                <div class="form-group mt-2">
                    <label for="title">student-email</label>
                    <input type="email" value='<?php echo $row['student-email'] ?>' class="form-control " name="student_email" required>
                </div>
                <div class="form-group mt-2">
                    <label for="title">student-no</label>
                    <input type="number" value='<?php echo $row['student-no'] ?>' class="form-control " name="student_no" required>
                </div>
                <div class="form-group mt-2">
                    <label for="title">student-regno</label>
                    <input type="text" value='<?php echo $row['student-regno'] ?>' class="form-control " name="student_regno" required>
                </div>
                <div class="form-group mt-2">
                    <label for="title">Student-course</label>
                    <input type="text" value='<?php echo $row['student-course'] ?>' class="form-control " name="student_course" required>
                </div>
                
                <div class="form-group mt-2">
                    <label for="title">Voting status</label>
                    <select name="voting_status" id="" class="form-control" required>
                   
                        
                        <option value="1">Approve Account</option>
                        <option value="2">Disapprove Account</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="title">Graduate Status</label>
                    <select name="graduate_status" id="" class="form-control" required>
                   
                        
                        <option value="1">Graduate</option>
                        <option value="0">Undergrad</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="title">Blacklisted</label>
                    <select name="blacklist_account" id="" class="form-control" required>
                   
                        
                        <option value="1">blacklist-account</option>
                        <option value="0">Whitelist-account</option>
                    </select>
                </div>







                <div class="d-flex">
                    <button name="save" style="text-transform: uppercase;" class="btn btn-success  mr-3 mt-3 ">Submit</button>
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

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
    crossorigin="anonymous"></script>
<script src="./dashboard/dashboard.js"></script>
</body>

</html>