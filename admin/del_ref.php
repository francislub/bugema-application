<?php
require_once 'config.php';

  // Get the course id from the URL
  $id = $_GET['id'];
   // Delete the course from the database
   $sql = "DELETE FROM referee WHERE id = '$id'";

   if ($conn->query($sql) === TRUE) {
     // Redirect back to the course.php page
     header("Location: referee.php");
     exit;
   } else {
    header("Location: referee.php");
     echo "Error deleting record: " . $conn->error;
   }

// Close the database connection
$conn->close();
?>
