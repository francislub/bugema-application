<?php
session_start();
require_once 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Connect to the database
    require_once '../admin/config.php';

    // Get the user's id from the session
    $id_number = $_SESSION['email'];

    // Prepare the SQL query to fetch id from the application_form table
    $sql = "SELECT id FROM application_form WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id_number);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the id
        $row = $result->fetch_assoc();
        $app_id = $row['id'];

        // Insert data into database
        $sql = "INSERT INTO referee (applica_id, title, name, email) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $app_id, $title, $name, $email);

        // Execute the INSERT statement
        if ($stmt->execute()) {
            // Record inserted successfully

            // Send email to the applicant
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
            $mail->SMTPAuth = true;
            $mail->Username = 'lubanjwafrancispro@gmail.com'; // Replace with your SMTP username
            $mail->Password = 'Francis2023'; // Replace with your SMTP password
            $mail->SMTPSecure = 'tls'; // Change to 'ssl' if required
            $mail->Port = 587; // Replace with your SMTP port

            $mail->setFrom('lubanjwafrancispro@gmail.com', 'Lubanjwa Francis');
            $mail->addAddress($email);
            $mail->addReplyTo('lubanjwafrancispro@gmail.com', 'Lubanjwa Francis');
            $mail->Subject = "Referee Update";
            $mail->Body = "Dear " . $name . ",
            
            You have been recommended as the referee, Bugema University request you to say something about our Applicant

            <ul>
              <li><a href='../user/reply.php' >Click Here To Enter Your Feedback</a></li>
            </ul>

            Thank you once again for your view about the Applicant. Bugema University.

            Best regards,
            Admissions Office
            Bugema University";

            if ($mail->send()) {
                // Email sent successfully
                echo '<div> Mail has been sent successfully.</div>';
            } else {
                // Failed to send email
                echo '<div>Message could not be sent. Please enter the correct email.</div>';
            }            
        } else {
            // Error inserting record
            header("Location: ../user/index.php?status=error&message=" . urlencode($stmt->error));
            exit();
        }
    } else {
        // No id found for the given email
        header("Location: ../user/index.php?status=error&message=No application found for the given email.");
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect if accessed directly without POST request
    header('Location: ../user/index.php');
    exit();
}
?>
