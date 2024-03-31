<?php
require_once('../user/tcpdf/tcpdf.php');

if (isset($_POST['app_id'])) {
    $app_id = $_POST['app_id'];

    // Connect to the database
    require_once 'config.php';
    //$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");

    // Check if connection was successful
    //if ($conn->connect_error) {
    //    die("Connection failed: " . $conn->connect_error);
    //}

    // Prepare the SQL query to fetch the application details
    $sql = "SELECT * FROM application_form WHERE app_id = '$app_id'";

    // Execute the query and get the result
    $result = $conn->query($sql);

    // Check if there is a matching application
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Create a new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Bugema University');
$pdf->SetAuthor('Bugema University');
$pdf->SetTitle('Application Details');
$pdf->SetSubject('Application Details');
$pdf->SetKeywords('Bugema University, Application Details');

// Set default header data
$pdf->SetHeaderData('', 0, '', '', array(0, 0, 0), array(255, 255, 255));

// Set header and footer fonts
$pdf->setHeaderFont(array('times', '', 9));
$pdf->setFooterFont(array('times', '', 9));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont('courier');

// Set margins
$pdf->SetMargins(10, 10, 10);

// Remove default footer
$pdf->setPrintFooter(false);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 10);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Add a page
$pdf->AddPage();

// Set text color to blue
$pdf->SetTextColor(0, 0, 255);

// Set font size and make it bold
$pdf->SetFont('times', 'B', 60);

// Output the logo on the left side
$pdf->Image('logo.png', 10, 10, 50, 0, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

// Set font size and style for Bugema University
$pdf->SetFont('times', 'B', 35);

// Output Bugema University on the same line, aligned to the right
$pdf->Cell(0, 40, 'BUGEMA UNIVERSITY', 0, 1, 'R');

// Set text color back to black for the rest of the document
$pdf->SetTextColor(0, 0, 0);

// Set font and size for contact details
$pdf->SetFont('times', '', 12);

$pdf->SetFont('times', 'B', 16);
$pdf->Cell(0, 20, 'NEW APPLICATION', 0, 1, 'C');

        // Set font
        $pdf->SetFont('helvetica', '', 12);

        // Output application data
        $pdf->Cell(0, 10, 'Application ID: ' . $row['app_id']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Name: ' . $row['full_name']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Date of Birth: ' . $row['date_of_birth']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Email: ' . $row['email']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Mobile Number: ' . $row['mobile_number']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Gender: ' . $row['gender']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Country: ' . $row['country']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'ID Type: ' . $row['id_type']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'ID Number: ' . $row['id_number']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Campus: ' . $row['location']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Session: ' . $row['time']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'School: ' . $row['school']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Level: ' . $row['level']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Course: ' . $row['course']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Know about BU: ' . $row['bu']);
        $pdf->Ln();
        $pdf->Cell(0, 10, 'Source: ' . $row['kabu']);
        $pdf->Ln();

        $name = $row['full_name'];
        $fileName = $name . "_application_details.pdf";
        // Output the PDF document
        $pdf->Output($fileName, 'D');
    } else {
        echo "Application not found.";
    }

    // Close the database connection
    $conn->close();
}
?>
