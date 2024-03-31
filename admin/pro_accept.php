<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

// Connect to the database
require_once 'config.php';
//$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");

// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}

// Get the id parameter from the GET request
$id = $_GET["id"];

// Update the status of the record with the given id to 1
$sql = "UPDATE application_form SET status = 2 WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    // Send email to the provided email address
    $sql = "SELECT email, full_name FROM application_form WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $to = $row["email"];
        $subject = "Congratulations on Your Provissional Admission";
        $message = "Dear " . $row["full_name"] . ",

        We are pleased to inform you that you have been admitted to Bugema University provisionally. However, your admission is pending the submission of your certificates.

        To proceed further, kindly log into your account using your registered email and application ID. Once logged in, you will be able to download your acceptance letter and other important documents.

        Thank you for choosing Bugema University, and we look forward to welcoming you to our esteemed institution.

        Best regards,
        Mghweno Leonard (Mr.)
        Registrar
        Bugema University";

        $mailer = new PHPMailer(true);

        try {
            // Set mailer to use SMTP
            $mailer->isSMTP();
            $mailer->Host = 'smtp.gmail.com';
            $mailer->SMTPAuth = true;
            $mailer->Username = 'admin@bugemauniv.ac.ug'; // Replace with your Gmail email address
            $mailer->Password = 'tqywsccimexzwitd'; // Replace with your generated app password
            $mailer->SMTPSecure = 'tls';
            $mailer->Port = 587;

            // Set the sender and recipient
            $mailer->setFrom('admission@bugemauniv.ac.ug', 'Bugema University');
            $mailer->addAddress($to);
            $mailer->addReplyTo('admissions@bugemauniv.ac.ug', 'Bugema University');

            // Set email subject and body
            $mailer->Subject = $subject;
            $mailer->Body = $message;

            // Send the email
            $mailer->send();
        } catch (Exception $e) {
            echo "Email could not be sent. Error: {$mailer->ErrorInfo}";
        }
    }
    
    // Redirect to succ_app.php
    header("Location: prov_succ_app.php");
    exit(); // Make sure to exit after the redirect
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
