<?php

require_once('tcpdf/tcpdf.php');

ob_start();

session_start();

if (!isset($_SESSION['email'])) {

    header('Location: ../login.php');

    exit;

}



// Get the user's id_number from the session

$email = $_SESSION['email'];



// Connect to the database
require_once '../admin/config.php';

//$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");



// Check if connection was successful

//f ($conn->connect_error) {

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



<title>BU | Applicant Admission Letter</title>



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

<?php

$status = $row['status'];



// Check the status value and display the appropriate message

if ($status == 0) {

    echo "Pending admission.";

} elseif ($status == 1) {

    ob_end_clean();

    // create new PDF document

    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);



    // set document information

    $pdf->SetCreator('TCPDF');

    $pdf->SetAuthor('Bugema University');

    $pdf->SetTitle('Admission Letter');

    $pdf->SetSubject('Admission');



    // set default font

    $pdf->SetFont('times', '', 12);



    // add a page

$pdf->AddPage();





// set header

$pdf->SetTextColor(0, 0, 255); // set text color to blue

$pdf->SetFont('times', 'B', 50); // increase font size and make it bold

$pdf->Cell(0, 15, 'BUGEMA UNIVERSITY', 0, 1, 'C'); // increase height to fit larger font size

$pdf->SetTextColor(0, 0, 0); // set text color back to black for the rest of the document





$pdf->SetFont('times', '', 9);

$pdf->Cell(0, 5, 'Main Campus, P.O Box 6529, Kampala - Uganda', 0, 0, 'L'); // combine main and kampala campus addresses

$pdf->Image('logo.png', 100, $pdf->GetY(), 20, 0, 'PNG');



$pdf->Cell(0, 5, 'Kampala Campus, P.O Box 123 Kampala', 0, 0, 'R'); // align kampala campus address to the right

$pdf->Ln();



$pdf->SetY(30); // move down to leave space for the blue lines

$pdf->Ln(); // add space after the header





$pdf->SetY(55); // move down to leave space for the blue lines

$pdf->SetLineWidth(0.2); // make the blue lines thinner

$pdf->SetDrawColor(0, 0, 255);

$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY()); // add the first blue line

$pdf->Line(10, $pdf->GetY() + 1, 200, $pdf->GetY() + 1); // add the second blue line



$pdf->SetFont('times', 'B', 16);

$pdf->Cell(0, 20, 'OFFICE OF THE REGISTRAR', 0, 1, 'C');



    $pdf->SetFont('times', '', 11);

    $country = $row['country'];

    $student_name = $row['full_name']; // Replace with actual student name

    $course_name = $row['course']; // Replace with actual course name

    $level = $row['level']; // Replace with actual level

    $session = $row['time'];

    $campus = $row['location'];



    $pdf->Write(10, date('j F, Y') . "\n");

    $pdf->Write(10, "Dear $student_name,\n");

    $pdf->SetFont('times', 'B', 12);

    $pdf->Write(10, "RE: ");

    $pdf->SetFont('times', 'BU', 11);

    $pdf->Write(10, "YOUR ADMISSION TO BUGEMA UNIVERSITY\n");



    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, "I am pleased to inform you that your application to join Bugema University (");

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, $campus);

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, ") has been approved");

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, " You have been accepted as a ");

    $pdf->SetFont('times', 'B', 9); // Set font style to bold and font size to 12

    $pdf->Write(10, $session);

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, " student for the Course: \n");

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, $course_name);

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, "\n");

    $pdf->SetFont('times', 'U', 9); // Set font style back to bold and font size to 9



    if ($level == "Certificate" || $level == "Diploma" || $level == "Masters" || $level == "Postgraduate Diploma") {

        $pdf->Write(10, "This is a Two-Year program.\n");

    } elseif ($level == "Degree") {

        $pdf->Write(10, "This is a Three-Year program.\n");

    }

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, "Enrollment will start on: August 07, 2023.\n");

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, "School fees are payable at the bank (refer to the back accounts listed in the fee structure); either through cash deposit, bank draft or wire transfer. Either way, ensure that you have enough documentary evidence for your payment. No studdent will be registered without clearance from the Business Office.\n");

    $pdf->Write(10, "Thank you for Choosing Bugema University. May God bless you in all your plans.\n");



    $pdf->Write(10, "Sincerely,\n\n");

    $pdf->Write(10, "Mghweno Leonard (Mr.)\n");

    $pdf->SetFont('times', 'BU', 9);

    $pdf->Write(10, "Registrar, Records and Admissions\n");



    // set footer

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, "Note: The University reserves the right to withdraw this admission and/or recall the award in case of any academic anomalies that may not be realized at the time of issuance.\n");

    $pdf->Write(10, "Please be sure to present your original certificates/pass slips during registration.\n");



    $pdf->Cell(0, 10, 'A CHARTERED SEVENTH-DAY ADVENTIST INSTITUTION ', 0, 0, 'C');



    // output PDF

    $pdf->Output('admission_letter.pdf', 'I');



} elseif ($status == 2) {

    ob_end_clean();

    // create new PDF document

    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);



    // set document information

    $pdf->SetCreator('TCPDF');

    $pdf->SetAuthor('Bugema University');

    $pdf->SetTitle('Admission Letter');

    $pdf->SetSubject('Admission');



    // set default font

    $pdf->SetFont('times', '', 12);



    // add a page

$pdf->AddPage();





// set header

$pdf->SetTextColor(0, 0, 255); // set text color to blue

$pdf->SetFont('times', 'B', 50); // increase font size and make it bold

$pdf->Cell(0, 15, 'BUGEMA UNIVERSITY', 0, 1, 'C'); // increase height to fit larger font size

$pdf->SetTextColor(0, 0, 0); // set text color back to black for the rest of the document





$pdf->SetFont('times', '', 9);

$pdf->Cell(0, 5, 'Main Campus, P.O Box 6529, Kampala - Uganda', 0, 0, 'L'); // combine main and kampala campus addresses

$pdf->Image('logo.png', 100, $pdf->GetY(), 20, 0, 'PNG');



$pdf->Cell(0, 5, 'Kampala Campus, P.O Box 123 Kampala', 0, 0, 'R'); // align kampala campus address to the right

$pdf->Ln();



$pdf->SetY(30); // move down to leave space for the blue lines

$pdf->Ln(); // add space after the header





$pdf->SetY(55); // move down to leave space for the blue lines

$pdf->SetLineWidth(0.2); // make the blue lines thinner

$pdf->SetDrawColor(0, 0, 255);

$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY()); // add the first blue line

$pdf->Line(10, $pdf->GetY() + 1, 200, $pdf->GetY() + 1); // add the second blue line



$pdf->SetFont('times', 'B', 16);

$pdf->Cell(0, 20, 'OFFICE OF THE REGISTRAR', 0, 1, 'C');



    $pdf->SetFont('times', '', 11);

    $country = $row['country'];

    $student_name = $row['full_name']; // Replace with actual student name

    $course_name = $row['course']; // Replace with actual course name

    $level = $row['level']; // Replace with actual level

    $session = $row['time'];

    $campus = $row['location'];



    $pdf->Write(10, date('j F, Y') . "\n");

    $pdf->Write(10, "Dear $student_name,\n");

    $pdf->SetFont('times', 'B', 12);

    $pdf->Write(10, "RE: ");

    $pdf->SetFont('times', 'BU', 11);

    $pdf->Write(10, "YOUR ADMISSION TO BUGEMA UNIVERSITY\n");



    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, "I am pleased to inform you that your application to join Bugema University (");

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, $campus);

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, ") has been approved");

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, " Provisionally pending submission of certificates and pass slip");

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, " You have been accepted as a ");

    $pdf->SetFont('times', 'B', 9); // Set font style to bold and font size to 12

    $pdf->Write(10, $session);

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, " student for the Course: \n");

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, $course_name);

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, "\n");

    $pdf->SetFont('times', 'U', 9); // Set font style back to bold and font size to 9



    if ($level == "Certificate" || $level == "Diploma" || $level == "Masters" || $level == "Postgraduate Diploma") {

        $pdf->Write(10, "This is a Two-Year program.\n");

    } elseif ($level == "Degree") {

        $pdf->Write(10, "This is a Three-Year program.\n");

    }

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, "Enrollment will start on: August 07, 2023\n");

    $pdf->SetFont('times', '', 9);

    $pdf->Write(10, "School fees are payable at the bank (refer to the back accounts listed in the fee structure); either through cash deposit, bank draft or wire transfer. Either way, ensure that you have enough documentary evidence for your payment. No studdent will be registered without clearance from the Business Office.\n");

    $pdf->Write(10, "Thank you for Choosing Bugema University. May God bless you in all your plans.\n");



    $pdf->Write(10, "Sincerely,\n\n");

    $pdf->Write(10, "Mghweno Leonard (Mr.)\n");

    $pdf->SetFont('times', 'BU', 9);

    $pdf->Write(10, "Registrar, Records and Admissions\n");



    // set footer

    $pdf->SetFont('times', 'B', 9);

    $pdf->Write(10, "Note: The University reserves the right to withdraw this admission and/or recall the award in case of any academic anomalies that may not be realized at the time of issuance.\n");

    $pdf->Write(10, "Please be sure to present your original certificates/pass slips during registration.\n");



    $pdf->Cell(0, 10, 'A CHARTERED SEVENTH-DAY ADVENTIST INSTITUTION ', 0, 0, 'C');



    // output PDF

    $pdf->Output('admission_letter.pdf', 'I');



} else {

    echo "Invalid status value.";

}

?>

  </div>

</div>





					                   

 



<?php include('footer.php');  ?> 

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

