<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="logo.png" type="image/png">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
   
     
            <div class="row">
                <div class="col-md-12 pt-2">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Courses list
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                            <tr>
                                <th>#</th>
                                <th>Course</th>
                                <th>Level</th>
                                <th>School</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //require_once 'config.php';
                            // Connect to the database
                            $conn = new mysqli("localhost", "root", "", "bugema2");
                            
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            
                            // Select data from the course table
                            $sql = "SELECT * FROM course";
                            $result = mysqli_query($conn, $sql);
                            
                            // Display data in the table
                            if (mysqli_num_rows($result) > 0) {
                                $i = 1;
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr class='odd gradeX'>";
                                    echo "<td class='center'>" . $i . "</td>";
                                    echo "<td class='center'>" . $row["course"] . "</td>";
                                    echo "<td class='center'>" . $row["level"] . "</td>";
                                    echo "<td class='center'>" . $row["school"] . "</td>";
                                    echo "<td class='center'>";
                                    

                                    
                                    echo "<a href='delete_course.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete?\");'> <button class='btn btn-danger'><i class='fa fa-trash'></i> Delete</button></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                            } else {
                                echo "<tr><td colspan='4' class='text-center'>No courses found.</td></tr>";
                            }
                            
                            // Close database connection
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


            
    </div>
    </div>

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>