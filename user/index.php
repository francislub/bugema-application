<?php

session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['app_id'])) {

    header('Location: ../index.php');

    exit;

}



// Get the user's id_number from the session

$id_number = $_SESSION['email'];



// Connect to the database
require_once '../admin/config.php';

// Prepare the SQL query to fetch all data from the application_form table where id_number matches the session id_number

$sql = "SELECT * FROM application_form WHERE email = '$id_number'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();


?>



<!DOCTYPE html>

<html>



<head>



<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">



<title>BU | Applicant Dashboard</title>

<link rel="icon" href="logo.png" type="image/png">



    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">



    <!-- Morris -->

    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">



    <!-- Gritter -->

    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">



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

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <span class="clear"><span class="text-muted text-xs block"><?php echo $row['full_name']; ?><b class="caret"></b></span> </span> </a>

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

                <?php
                if (isset($_GET['status']) && isset($_GET['message'])) {
                    $status = $_GET['status'];
                    $message = $_GET['message'];

                    if ($status === 'success') {
                        // Display success alert
                        echo   $message ;
                    } elseif ($status === 'error') {
                        // Display error alert
                        echo  $message ;
                    }
                }
                ?>

        </div>



            <ul class="nav navbar-top-links navbar-right">
                
                <li>

				

				

                    <span class="m-r-sm text-muted welcome-message">Welcome to your Dashboard</span>

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

        <div class="row">

        
        <div class="col-lg-3">

        <div class="ibox float-e-margins">

            <div class="ibox-title">

            <h5><span class="label label-primary pull-right">Application ID</span></h5>

            </div>

            <div class="ibox-content">

            <h3 class="no-margins" id="app_id"><?php echo $row['app_id']; ?></h3>

            </div>

        </div>

        </div>



	                

					   <div class="col-lg-3">

                        <div class="ibox float-e-margins">

                            <div class="ibox-title">

                              <h5><span class="label label-info pull-right">Date Registered</span>

                                </h5>

                            </div>

                            <div class="ibox-content">

                                <h3 class="no-margins"><?php echo $row['created_at']; ?></h3>

                                <small> </small> 

						  </div>

                        </div>

                       </div>

					

                    <div class="col-lg-3">

                    <div class="ibox float-e-margins">

                        <div class="ibox-title">

                            <h5><span class="label label-secondary pull-right">Admission Status</span></h5>

                        </div>

                        <div class="ibox-content">

                            <h3 class="no-margins">

                                <?php 

                                if(($row['status']) == 0) {

                                    echo '<h4 style="color:red">No Admission yet.</h4>';

                                } else {

                                    echo '<h4 style="color:green">Congrats, Admission Offered</h4>';

                                } 

                                ?>

                            </h3>

                            <small> </small> 

                        </div>
                        
                    </div>  

                    </div>
                    <!--------------------Referees-------------------------->
                    <?php
                    // Connect to the database
                    require_once 'sidebar.php';
                    
                    // Check the user's level and set the display value for the "Referee" bar
                    if ($row['level'] === 'Masters') {
                        $refereeDisplay = 'block';
                    } else {
                        $refereeDisplay = 'none';
                    }
                    ?>
                    <?php if ($row['level'] === 'Masters'): ?>
                    <div class="col-lg-3"  id="referee" style="display: <?php echo $refereeDisplay; ?>">

                    <div class="ibox float-e-margins">

                        <div class="ibox-title">

                            <h5><span class="label label-secondary pull-right">Referee Status</span></h5>

                        </div>

                        <div class="ibox-content">
                            <h3 class="no-margins">

                            <?php 
                            // Check if referee exists for the given email or app_id
                            require_once '../admin/config.php';
                            $id_number = $_SESSION['email'];

                            // Prepare the SQL query to count referees for the given email or app_id
                            $sql = "SELECT COUNT(*) AS referee_count FROM referee WHERE applica_id = (SELECT id FROM application_form WHERE email = ?)";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("s", $id_number);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            $row = $result->fetch_assoc();
                            $referee_count = $row['referee_count'];

                            // Display appropriate message based on the count
                            if($referee_count == 0) {
                                echo '<h4 style="color:red">No Referee yet.</h4>';
                            } else {
                                echo '<h4 style="color:green">Referee attached.</h4>';
                                if (isset($_GET['status']) && isset($_GET['message'])) {
                                    $status = $_GET['status'];
                                    $message = $_GET['message'];

                                    if ($status === 'success') {
                                        // Display success alert
                                        //echo '<div class="alert alert-success">' . $message . '</div>';
                                    } elseif ($status === 'error') {
                                        // Display error alert
                                        //echo '<div class="alert alert-danger">' . $message . '</div>';
                                    }
                                }
                            } 

                            ?>

                        </h3>
                        <small> </small>   
                        </div>
                    </div>
                    </div>
                    <?php endif; ?>
                                       
</div>





					                   

 

        <div class="row">

          <div class="col-lg-12"> 

            <p>&nbsp;</p>

            <p>

		

			</p>

            <p>		</p>

            <p></p>

            <div class="row">&nbsp; </p>

          </div>

          </div>





          </div>

            <div class="footer">

            

            <div>

<?php include('footer.php');  ?>            </div>

        </div>

        </div>

</div>



            <!-- Mainly scripts -->

    <script src="js/jquery-2.1.1.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>



    <!-- Flot -->

    <script src="js/plugins/flot/jquery.flot.js"></script>

    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>

    <script src="js/plugins/flot/jquery.flot.spline.js"></script>

    <script src="js/plugins/flot/jquery.flot.resize.js"></script>

    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>

    <script src="js/plugins/flot/jquery.flot.time.js"></script>



    <!-- Peity -->

    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <script src="js/demo/peity-demo.js"></script>



    <!-- Custom and plugin javascript -->

    <script src="js/inspinia.js"></script>

    <script src="js/plugins/pace/pace.min.js"></script>



    <!-- jQuery UI -->

    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>



    <!-- Jvectormap -->

    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>

    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>



    <!-- EayPIE -->

    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>



    <!-- Sparkline -->

    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>



    <!-- Sparkline demo data  -->

    <script src="js/demo/sparkline-demo.js"></script>



    <script>

        $(document).ready(function() {

            $('.chart').easyPieChart({

                barColor: '#f8ac59',

//                scaleColor: false,

                scaleLength: 5,

                lineWidth: 4,

                size: 80

            });



            $('.chart2').easyPieChart({

                barColor: '#1c84c6',

//                scaleColor: false,

                scaleLength: 5,

                lineWidth: 4,

                size: 80

            });



            var data2 = [

                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],

                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],

                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],

                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],

                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],

                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],

                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],

                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]

            ];



            var data3 = [

                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],

                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],

                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],

                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],

                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],

                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],

                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],

                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]

            ];





            var dataset = [

                {

                    label: "Number of orders",

                    data: data3,

                    color: "#1ab394",

                    bars: {

                        show: true,

                        align: "center",

                        barWidth: 24 * 60 * 60 * 600,

                        lineWidth:0

                    }



                }, {

                    label: "Payments",

                    data: data2,

                    yaxis: 2,

                    color: "#464f88",

                    lines: {

                        lineWidth:1,

                            show: true,

                            fill: true,

                        fillColor: {

                            colors: [{

                                opacity: 0.2

                            }, {

                                opacity: 0.2

                            }]

                        }

                    },

                    splines: {

                        show: false,

                        tension: 0.6,

                        lineWidth: 1,

                        fill: 0.1

                    },

                }

            ];





            var options = {

                xaxis: {

                    mode: "time",

                    tickSize: [3, "day"],

                    tickLength: 0,

                    axisLabel: "Date",

                    axisLabelUseCanvas: true,

                    axisLabelFontSizePixels: 12,

                    axisLabelFontFamily: 'Arial',

                    axisLabelPadding: 10,

                    color: "#d5d5d5"

                },

                yaxes: [{

                    position: "left",

                    max: 1070,

                    color: "#d5d5d5",

                    axisLabelUseCanvas: true,

                    axisLabelFontSizePixels: 12,

                    axisLabelFontFamily: 'Arial',

                    axisLabelPadding: 3

                }, {

                    position: "right",

                    clolor: "#d5d5d5",

                    axisLabelUseCanvas: true,

                    axisLabelFontSizePixels: 12,

                    axisLabelFontFamily: ' Arial',

                    axisLabelPadding: 67

                }

                ],

                legend: {

                    noColumns: 1,

                    labelBoxBorderColor: "#000000",

                    position: "nw"

                },

                grid: {

                    hoverable: false,

                    borderWidth: 0

                }

            };



            function gd(year, month, day) {

                return new Date(year, month - 1, day).getTime();

            }



            var previousPoint = null, previousLabel = null;



            $.plot($("#flot-dashboard-chart"), dataset, options);



            var mapData = {

                "US": 298,

                "SA": 200,

                "DE": 220,

                "FR": 540,

                "CN": 120,

                "AU": 760,

                "BR": 550,

                "IN": 200,

                "GB": 120,

            };



            $('#world-map').vectorMap({

                map: 'world_mill_en',

                backgroundColor: "transparent",

                regionStyle: {

                    initial: {

                        fill: '#e4e4e4',

                        "fill-opacity": 0.9,

                        stroke: 'none',

                        "stroke-width": 0,

                        "stroke-opacity": 0

                    }

                },



                series: {

                    regions: [{

                        values: mapData,

                        scale: ["#1ab394", "#22d6b1"],

                        normalizeFunction: 'polynomial'

                    }]

                },

            });

        });

    </script>

</body>

</html>

