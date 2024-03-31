<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

// Connect to the database
require_once 'config.php';
//$conn = new mysqli("localhost", "root", "", "bugema2");

// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}

// Get the id parameter from the GET request
$id = $_GET["id"];

// Update the status of the record with the given id to 1
$sql = "UPDATE application_form SET status = 1 WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    // Send email to the provided email address
    $sql = "SELECT * FROM application_form WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@bugemauniv.ac.ug'; // Replace with your SMTP username
        $mail->Password = 'tqywsccimexzwitd'; // Replace with your SMTP password
        $mail->SMTPSecure = 'tls'; // Change to 'ssl' if required
        $mail->Port = 587; // Replace with your SMTP port
        
        $mail->setFrom('admissions@bugemauniv.ac.ug', 'Bugema University');
        $mail->addAddress($row["email"]);
        $mail->addReplyTo('admissions@bugemauniv.ac.ug', 'Bugema University');
        $mail->Subject = "Congratulations on Your Admission";
        $mail->Body = "Dear " . $row["full_name"] . ",

        We are pleased to inform you that you have been successfully admitted to Bugema University. Congratulations on your admission!

        To proceed further, please log into your account using your registered email and application ID. Once logged in, you will be able to access and download your acceptance letter and other important documents.

        We would like to extend our warmest congratulations on your acceptance to Bugema University. We are confident that you will thrive and succeed in our esteemed institution.

        If you have any questions or require any further assistance, please do not hesitate to contact the Admissions Office.

        Best regards,
        
        Admissions Office
        Bugema University";

        if ($mail->send()) {
            // Redirect to succ_app.php
            header("Location: succ_app.php");
            exit(); // Make sure to exit after the redirect
        } else {
            echo "Failed to send email: " . $mail->ErrorInfo;
        }
    }
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


// Close database connection
mysqli_close($conn);
?>
