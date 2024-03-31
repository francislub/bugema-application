<?php
session_start(); // Start the session

// Check if the form is submitted
if(isset($_POST['login'])){
  // Retrieve form data
  $email = $_POST['email'];
  $app_id = $_POST['app_id'];

  // Database credentials
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bugema2";

  // Create a new PDO instance
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM application_form WHERE email = :email AND app_id = :app_id");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':app_id', $app_id);
    $stmt->execute();

    // Check if a matching record is found
    if($stmt->rowCount() > 0) {
      // Authentication successful
      $_SESSION['email'] = $email; // Store email in session variable
      $_SESSION['app_id'] = $app_id;
      header("Location: user/index.php");
      exit();
    } else {
      // Authentication failed
      echo '<script>alert("Invalid email or application ID."); window.location.href = "index.php";</script>';
    }
  } catch(PDOException $e) {
    // Display errors
    echo "Connection failed: " . $e->getMessage();
  }
}
?>

