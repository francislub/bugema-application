<?php

session_start();

if (!isset($_SESSION['email'])) {

    header('Location: ../index.php');

    exit;

}



// Get the user's id_number from the session

$email = $_SESSION['email'];





// Connect to the database
require_once '../admin/config.php';

//$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");



// Check if connection was successful

//if ($conn->connect_error) {

//  die("Connection failed: " . $conn->connect_error);

//}



// Prepare the SQL query to fetch all data from the application_form table where id_number matches the session id_number

$sql = "SELECT * FROM application_form WHERE email = '$email'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>

<html>



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>BU | Applicant Profile</title>

    <link rel="icon" href="logo.png" type="image/png">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

</head>



<body>

    <div id="wrapper">



    <nav class="navbar-default navbar-static-side" role="navigation">

        <div class="sidebar-collapse">

            <ul class="nav metismenu" id="side-menu">

                <li class="nav-header">

                    <div class="dropdown profile-element"> 

                    <img src="logo.png" alt="image" width="142" height="153" class="img-circle" />

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $row['full_name']; ?>

                            <span class="clear"><span class="text-muted text-xs block"> <b class="caret"></b></span> </span> </a>

                        <ul class="dropdown-menu animated fadeInRight m-t-xs">

                            

                            <li><a href="logout.php">Logout</a></li>

                        </ul>

  </div>	

   

			   <?php

			   include('sidebar.php');

			   

			   ?>

			   

	       </ul>



        </div>

    </nav>



        <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">

        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">

        <div class="navbar-header">

            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

            

        </div>

            <ul class="nav navbar-top-links navbar-right">

                <li>

                    <span class="m-r-sm text-muted welcome-message">Welcome to DASHBOARD</span>

                </li>

                <li class="dropdown">

                <li>

                    <a href="logout.php">

                        <i class="fa fa-sign-out"></i> Log out

                    </a>

                </li>

               

            </ul>



        </nav>

        </div>



        <div class="wrapper wrapper-content">

            <div class="row animated fadeInRight">

                <div class="col-md-4">

                    <div class="ibox float-e-margins">

                        <div class="ibox-title">

                            <h5>Profile Detail</h5>

                        </div>

                        <div>

                            <div class="ibox-content profile-content">

                                <h4><strong><?php echo $row['full_name']; ?> </strong></h4>

                               

                                <h5><strong>Application ID</strong>: <?php echo $row['app_id']; ?></h5>

                            </div>

                        </div>

                </div>

                    </div>

                <div class="col-md-8">

                    <div class="ibox float-e-margins">

                        <div class="ibox-title">

                            <h3>Personal Information</h3>

                            <div class="ibox-tools">

                                <a class="collapse-link">

                                    <i class="fa fa-chevron-up"></i>

                                </a>

                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                                    <i class="fa fa-wrench"></i>

                                </a>

                                <a class="close-link">

                                    <i class="fa fa-times"></i>

                                </a>

                            </div>

                        </div>

                        <div class="ibox-content">



                            <div>

                                <div class="feed-activity-list">



                                    

									<div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Date of Birth :  </strong><?php echo $row['date_of_birth']; ?><strong><br>

                                        </div>

                                    </div>

									<div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Email:  </strong><?php echo $row['email']; ?><strong><br>

                                        </div>

                                    </div>

									<div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Phone :  </strong><?php echo $row['mobile_number']; ?><strong>  <br>

                                        </div>

                                    </div>





									<div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Gender :  </strong><?php echo $row['gender']; ?><strong> <br>

                                        </div>

                                    </div>

									<div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Country :  </strong><?php echo $row['country']; ?><strong> <br>

                                        </div>

                                    </div>

									<div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>ID Type :  </strong><?php echo $row['id_type']; ?><strong>  <br>

                                        </div>

                                    </div>

                                  <div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>ID Number :  </strong><?php echo $row['id_number']; ?><strong> <br>

                                        </div>

                                    </div>

									 <div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Campus :  </strong><?php echo $row['location']; ?><strong>  <br>

                                        </div>

                                    </div>

                                    <div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Session:  </strong><?php echo $row['time']; ?><strong>  <br>

                                        </div>

                                    </div>

                                    <div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>School:  </strong><?php echo $row['school']; ?><strong>  <br>

                                        </div>

                                    </div>

                                    <div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Course:  </strong><?php echo $row['course']; ?><strong>  <br>

                                        </div>

                                    </div>

									 <div class="feed-element">

                                        <a href="#" class="pull-left">

                                        </a>

                                        <div class="media-body ">

                                            <small class="pull-right text-navy"></small>

                                            <strong>Religion :  </strong><?php echo $row['religion']; ?>  <br>

                                        </div>

                                    </div>

                                    

                                </div>



                            </div>



                        </div>

                    </div>



                </div>

            </div>

        </div>

        <div class="footer">

            <div class="pull-right">

            </div>

            <div>

                <?php include('footer.php'); ?>

            </div>

        </div>



        </div>

        </div>







    <!-- Mainly scripts -->

    <script src="js/jquery-2.1.1.js"></script>

    <script src="js/bootstrap.js"></script>

    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>



    <!-- Custom and plugin javascript -->

    <script src="js/inspinia.js"></script>

    <script src="js/plugins/pace/pace.min.js"></script>



    <!-- Peity -->

    <script src="js/plugins/peity/jquery.peity.min.js"></script>



    <!-- Peity -->

    <script src="js/demo/peity-demo.js"></script>



</body>



</html>

