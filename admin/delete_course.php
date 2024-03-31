<?php
  $servername = "localhost";
  $username = "dbs";
  $password = "Pass@OurBu@2023!";
  $dbname = "bugerifg_apply";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // Get the course id from the URL
  $id = $_GET['id'];
   // Delete the course from the database
   $sql = "DELETE FROM course WHERE id = $id";

   if ($conn->query($sql) === TRUE) {
     // Redirect back to the course.php page
     header("Location: course.php");
     exit;
   } else {
     echo "Error deleting record: " . $conn->error;
   }
   // Close the database connection
  $conn->close();
?>
