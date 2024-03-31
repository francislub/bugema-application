<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

// Get the email address of the applicant
$sql = "SELECT email FROM application_form WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$email = $row['email'];

// Delete the record
$sql_delete = "DELETE FROM application_form WHERE id = '$id'";

if (mysqli_query($conn, $sql_delete)) {
    // Send email to the applicant
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = 'admin@bugemauniv.ac.ug'; // Replace with your SMTP username
    $mail->Password = 'tqywsccimexzwitd'; // Replace with your SMTP password
    $mail->SMTPSecure = 'tls'; // Change to 'ssl' if required
    $mail->Port = 587; // Replace with your SMTP port
    
    $mail->setFrom('admissions@bugemauniv.ac.ug', 'Bugema University');
    $mail->addAddress($email);
    $mail->addReplyTo('admissions@bugemauniv.ac.ug', 'Bugema University');
    $mail->Subject = "Application Update";
    $mail->Body = "Dear " . $row["full_name"] . ",

    Thank you for considering Bugema University for your education. We regret to inform you that your application was not successful at this time. We appreciate your interest and effort in applying to our institution.

    We understand that this news may be disappointing, but we encourage you to explore other courses and opportunities that align with your academic and career goals. Bugema University offers a wide range of programs, and we encourage you to consider alternative options that may be a better fit for your aspirations.

    We wish you the best in your educational journey and future endeavors. Should you have any questions or require further guidance, please feel free to reach out to our Admissions Office.

    Thank you once again for considering Bugema University.

    Best regards,
    [Your Name]
    Admissions Office
    Bugema University";

    if ($mail->send()) {
        // Email sent successfully
        echo "Email sent successfully.";
    } else {
        // Failed to send email
        echo "Error sending email: " . $mail->ErrorInfo;
    }

    // Redirect to applicants.php
    header("Location: applicants.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
