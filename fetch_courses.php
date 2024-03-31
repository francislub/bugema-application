<?php
// Connect to the database
require_once 'admin/config.php';
//$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");

// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}

// Get the selected school and level from the URL parameters
$selectedSchool = $_GET['school'];
$selectedLevel = $_GET['level'];

// Prepare the query to fetch courses based on the selected school and level
$sql = "SELECT course FROM course WHERE school = '$selectedSchool' AND level = '$selectedLevel'";
$result = mysqli_query($conn, $sql);

// Fetch the courses and store them in an array
$courses = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row["course"];
    }
}

// Return the courses as JSON
echo json_encode($courses);

// Close database connection
mysqli_close($conn);
?>
