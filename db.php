<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    .btn-left {
        float: left;
    }
</style>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
// Create connection
require_once 'admin/config.php';
//$conn = new mysqli("localhost", "root", "", "bugema2");

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

// Get form data
$full_name = $_POST["full_name"];
$date_of_birth = $_POST["date_of_birth"];
$email = $_POST["email"];
$mobile_number = $_POST["mobile_number"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$id_type = $_POST["id_type"];
$id_number = $_POST["id_number"];
$religion = $_POST["religion"];
$location = $_POST["location"];
$time = $_POST["time"];
$school = $_POST["school"];
$level = $_POST["level"];
$course = $_POST["course"];
$type = $_POST["type"];
$know = $_POST["bu"];
$kabu = $_POST["kabu"];

$status = '0';

// Validate mobile number


// Check if email or ID number already exists
$sql = "SELECT * FROM application_form WHERE email='$email' OR id_number='$id_number'";
$result = $conn->query($sql);

    // Verify email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '
            <div class="error-box" style="background-color: #fff; border: 2px solid #ddd; padding: 20px; border-radius: 5px; margin: auto; max-width: 600px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                <h2 style="font-size: 2.5rem; color: #ff0000; margin-top: 50px; margin-bottom: 30px;">Application Error!</h2>
                <p style="font-size: 1.2rem; color: #ff0000; margin-bottom: 20px;">Invalid email format</p>
    
                <a href="application.php" class="btn" style="display: inline-block; padding: 10px 20px; background-color: #337ab7; color: #fff; border-radius: 5px; text-decoration: none; margin-top: 20px; transition: background-color 0.3s ease-in-out;">Re-Apply</a>
            </div>
        ';
        exit(); // Stop further execution if email is invalid
    }

    // Verify age
    $birth_date = strtotime($date_of_birth);
    $min_age = strtotime("-16 years");
    if ($birth_date > $min_age) {
        echo '
            <div class="error-box" style="background-color: #fff; border: 2px solid #ddd; padding: 20px; border-radius: 5px; margin: auto; max-width: 600px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                <h2 style="font-size: 2.5rem; color: #ff0000; margin-top: 50px; margin-bottom: 30px;">Application Error!</h2>
                <p style="font-size: 1.2rem; color: #ff0000; margin-bottom: 20px;">You must be at least 16 years old to apply</p>
    
                <a href="application.php" class="btn" style="display: inline-block; padding: 10px 20px; background-color: #337ab7; color: #fff; border-radius: 5px; text-decoration: none; margin-top: 20px; transition: background-color 0.3s ease-in-out;">Re-Apply</a>
            </div>
        ';
        exit(); // Stop further execution if age is below 16
    }

    // Generate application ID number
    $sql = "SELECT COUNT(*) FROM application_form";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $year = date("y");
    $app_id = $year . "/APP/BU/" . str_pad($row["COUNT(*)"]+1, 4, "0", STR_PAD_LEFT);

    // Handle file upload
    $file_name = $_FILES["document"]["name"];
    $file_tmp = $_FILES["document"]["tmp_name"];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_path = "uploads/" . uniqid() . "." . $file_ext;

    move_uploaded_file($file_tmp, $file_path);

    $new_path = "../" . $file_path;

    // Insert data into database
    $sql = "INSERT INTO application_form (full_name, date_of_birth, email, mobile_number, gender, country, id_type, id_number, religion, location, time, school, level, course, type, document, bu, kabu, app_id, status) 
            VALUES ('$full_name', '$date_of_birth', '$email', '$mobile_number', '$gender', '$country', '$id_type', '$id_number', '$religion', '$location', '$time', '$school', '$level', '$course', '$type', '$new_path', '$know', '$kabu', '$app_id', '$status')";

    if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['full_name'] = $full_name;
    $_SESSION['app_id'] = $app_id;
    echo '
    <div class="success-box" style="background-color: #fff; border: 2px solid #ddd; padding: 20px; border-radius: 5px; margin: auto; max-width: 600px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        <h2 style="font-size: 2rem; color: #333; margin-top: 20px; margin-bottom: 30px; font-family: "Montserrat", sans-serif;">Application pending payment!</h2>
        <p style="font-size: 1rem; color: #555; margin-bottom: 20px; font-family: "Montserrat", sans-serif;">
            Thank you for applying to Bugema University, <strong style="font-weight: 700;">' . $_SESSION['full_name'] . '</strong>. Your application ID is (<strong style="font-weight: 700;">' . $_SESSION['app_id'] . '</strong>) use it to make payment of your application fee(50,000UGX).<br>
        </p>

        <div style="text-align: left;">
            <a href="https://flutterwave.com/pay/knnkksyba00b" class="btn" style="display: inline-block; padding: 10px 20px; background-color: #ff8c00; color: #fff; border-radius: 5px; text-decoration: none; margin-top: 20px; transition: background-color 0.3s ease-in-out; font-family: "Montserrat", sans-serif;">Make Payment</a>
        </div>
    </div>';

    // Send email to the user
    $to = $email;
    $subject = "Application Successful";
    $message = "Dear Applicant,

        Thank you for applying to Bugema University. We are pleased to inform you that your application to our institution has been successful. Your application ID is: " . $_SESSION['app_id'] . ". This unique identifier, along with your registered email address, will serve as your login credentials for accessing your account.

        We appreciate your commitment to pursuing education at Bugema University, and we look forward to supporting you throughout your academic journey. Should you have any questions or require assistance, please do not hesitate to reach out to our admissions team.

        Once again, congratulations on your successful application, and we wish you every success in your future endeavors.

        Sincerely,

        Admissions Office
        Bugema University";

    $mailer = new PHPMailer(true);
    try {
        // Set mailer to use SMTP
        $mailer->isSMTP();
        $mailer->Host = 'smtp.gmail.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'admin@bugemauniv.ac.ug'; // Replace with your Gmail email address
        $mailer->Password = 'bjjpcgicdlxxygnq'; // Replace with your generated app password
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
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();
?>
