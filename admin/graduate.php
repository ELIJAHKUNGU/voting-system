<?php

require_once 'config.php';
include './header.php'


?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <span>Graduate Studets </span>
    </div>



    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email Address</th>
                    <th scope="col">Student Registration No</th>
                    <th scope="col">Student Phone Number</th>
                    <th scope="col">Course</th>
                    <th scope="col">Year of Joining school</th>
                    <th scope="col">Expected Graduation Year</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php

                require 'db.php';
                $qry = "SELECT * FROM `students`  where `graduate-status` = 1";
                $products = $conn->query($qry);
                while ($row = $products->fetch_assoc()) {
                    // SELECT `student-id`, `student-name`, `student-email`, `student-no`, `student-regno`, 
                    //`student-course`, `student-join`, `student-graduate`, `graduate-status`, `voting-status`, `blacklist-account` FROM `students` WHERE 1

                ?>
                    <tr>
                        <td><?php echo 'jkuat-00' . $row['student-id'] ?></td>
                        <td><?php echo $row['student-name'] ?></td>
                        <td><?php echo $row['student-email'] ?></td>
                        <td><?php echo $row['student-regno']   ?></td>
                        <td><?php echo $row['student-no']   ?></td>

                        <td><?php echo $row['student-course'] ?></td>
                        <td><?php echo $row['student-join'] ?></td>
                        <td><?php echo $row['student-graduate']   ?></td>
                        

                    </tr>
                <?php

                }
                ?>
                <tr>

                </tr>

            </tbody>
        </table>
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