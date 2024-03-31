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
                           Applications list
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'config.php';
                            // Connect to the database
                            //$conn = new mysqli("localhost", "root", "", "bugema2");
                            
                            // Check connection
                            //if (!$conn) {
                            //    die("Connection failed: " . mysqli_connect_error());
                            //}
                            
                            // Select data from the course table
                            $sql = "SELECT * FROM application_form WHERE status = 0";
                            $result = mysqli_query($conn, $sql);
                            
                            // Display data in the table
                            if (mysqli_num_rows($result) > 0) {
                                $i = 1;
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr class='odd gradeX'>";
                                    echo "<td class='center'>" . $i . "</td>";
                                    echo "<td class='center'>" . $row["full_name"] . "</td>";
                                    echo "<td class='center'>" . $row["course"] . "</td>";
                                    echo "<td class='center'>";
                                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editModal" . $row["id"] . "'><i class='fa fa-edit'></i> View</button>";

                                echo "<div class='modal' id='editModal" . $row["id"] . "'>
                                        <div class='modal-dialog modal-lg'>
                                            <div class='modal-content'>
                                            
                                                <!-- Modal Header -->
                                                <div class='modal-header'>
                                                    <h4 class='modal-title'>Details</h4>
                                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class='modal-body'>
                                                    <div class='row'>
                                                        <div class='col-md-6'>
                                                            <p><strong>Application ID: </strong>" . $row["app_id"] . "</p>
                                                            <p><strong>Full Name: </strong>" . $row["full_name"] . "</p>
                                                            <p><strong>Date of Birth: </strong>" . $row["date_of_birth"] . "</p>
                                                            <p><strong>Email: </strong>" . $row["email"] . "</p>
                                                            <p><strong>Mobile Number: </strong>" . $row["mobile_number"] . "</p>
                                                            <p><strong>Gender: </strong>" . $row["gender"] . "</p>
                                                            <p><strong>Country: </strong>" . $row["country"] . "</p>
                                                            <p><strong>ID Type: </strong>" . $row["id_type"] . "</p>
                                                            <p><strong>ID Number: </strong>" . $row["id_number"] . "</p>
                                                            <p><strong>Campus: </strong>" . $row["location"] . "</p>
                                                            <p><strong>Session: </strong>" . $row["time"] . "</p>
                                                            <p><strong>School: </strong>" . $row["school"] . "</p>
                                                            <p><strong>Level: </strong>" . $row["level"] . "</p>
                                                            <p><strong>Course: </strong>" . $row["course"] . "</p>
                                                            <p><strong>Know about BU: </strong>" . $row["bu"] . "</p>
                                                            <p><strong>Source: </strong>" . $row["kabu"] . "</p>
                                                        </div>
                                                        <div class='col-md-6'>
                                                        <p><strong>Attached Document: </strong></p>";
                                                        $documentLocation = $row["document"];
                                                        $documentExtension = pathinfo($documentLocation, PATHINFO_EXTENSION);
                                                        if (in_array($documentExtension, ["pdf", "doc", "jpg", "jpeg"])) {
                                                            echo "<iframe src='$documentLocation' width='100%' height='500px'></iframe>";
                                                        } else {
                                                            echo "Invalid document format";
                                                        }
                                                        echo "

                                                    </div>
                                                    <div class='col-md-6'>
                                                        <form action='save_pdf.php' method='post' target='_blank'>
                                                            <input type='hidden' name='app_id' value='" . $row["app_id"] . "'>
                                                            <button type='submit' class='btn btn-primary'><i class='fa fa-download'></i> Save as PDF</button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>";


                                    
                                    echo "<a href='accept.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to accept this application?\");'> <button class='btn btn-success'><i class='fa fa-check'></i> Accept</button></a>";
                                    echo "<a href='pro_accept.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to accept this application?\");'> <button class='btn btn-success'><i class='fa fa-check'></i>Prov Accept</button></a>";

                                    echo "<a href='del_app.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete?\");'> <button class='btn btn-danger'><i class='fa fa-trash'></i> Reject</button></a>";
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