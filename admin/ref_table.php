<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" href="logo.png" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
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
                           Referee list
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Applicant App</th>
                                <th>Referee Title</th>
                                <th>Referee Name </th>
                                <th>Referee Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Connect to the database
                            require_once 'config.php';
                            
                            // Select data from the course table
                            $sql = "SELECT * FROM referee ";
                            $result = mysqli_query($conn, $sql);
                            
                            // Display data in the table
                            if (mysqli_num_rows($result) > 0) {
                                $i = 1;
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr class='odd gradeX'>";
                                    echo "<td class='center'>" . $i . "</td>";
                                     // Get the user's id from the session
                                    $id_number = $_SESSION['email'];

                                    // Prepare the SQL query to fetch name from the application_form table based on applica_id
                                    $sql_name = "SELECT app_id, full_name FROM application_form WHERE id = ?  LIMIT 1";
                                    $stmt_name = $conn->prepare($sql_name);
                                    $stmt_name->bind_param("s", $row["applica_id"]);
                                    $stmt_name->execute();
                                    $result_name = $stmt_name->get_result();

                                    if ($result_name && $result_name->num_rows == 1) { // Check both conditions
                                        $row_name = $result_name->fetch_assoc();
                                        echo "<td class='center'>" . (!empty($row_name["full_name"]) ? $row_name["full_name"] : 'Not Found') . "</td>";
                                        echo "<td class='center'>" . (!empty($row_name["app_id"]) ? $row_name["app_id"] : '') . "</td>";
                                        
                                    } else {
                                        echo "<td class='center'>No app found</td>";
                                    }
                                    echo "<td class='center'>" . $row["title"] . "</td>";
                                    echo "<td class='center'>" . $row["name"] . "</td>";
                                    echo "<td class='center'>" . $row["email"] . "</td>";
                                    echo "<td class='center'>";
                                    echo "<div class='btn-container'>";
                                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editModal" . $row["id"] . "'><i class='fa fa-edit'></i> View</button>";

                                echo "<div class='modal' id='editModal" . $row["id"] . "'>
                                        <div class='modal-dialog modal-lg'>
                                            <div class='modal-content'>
                                            
                                                <!-- Modal Header -->
                                                <div class='modal-header'>
                                                    <h4 class='modal-title'>Referee Details About Applicant</h4>
                                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class='modal-body'>
                                                    <div class='row'>
                                                        <div class='col-md-6'>
                                                            <p><strong>Application ID: </strong>" . $row["applica_id"] . "</p>
                                                            <p><strong>Applicant Name: </strong>" . $row_name["full_name"] . "</p>
                                                            <p><strong>Applicant App: </strong>" . $row_name["app_id"] . "</p>
                                                            
                                                            <p><strong>Referee Title: </strong>" . $row["title"] . "</p>
                                                            <p><strong>Referee Name: </strong>" . $row["name"] . "</p>
                                                            <p><strong>Referee Email: </strong>" . $row["email"] . "</p>
                                                            
                                                        </div>
                                                        <div class='col-md-6'>
                                                        <p><strong>Information from Referee: </strong></p>";
                                                        $information = $row["information"];
                                                        echo "<iframe src='$information' width='100%' height='500px'></iframe>";
                                                        echo "

                                                    </div>
                                
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>";

                                    echo "<a href='accept.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to accept this Referee feedback?\");'> <button class='btn btn-success'><i class='fa fa-check'></i> Accept</button></a>";
                                    echo "<a href='del_ref.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this Referee feedback?\");'> <button class='btn btn-danger'><i class='fa fa-trash'></i>Reject</button></a>";
                                    echo "</div>";
                                    
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