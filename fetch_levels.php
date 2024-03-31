<?php
// Connect to the database
require_once 'admin/config.php';
//$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");

// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}

// Get the selected school from the URL parameter
$selectedSchool = $_GET['school'];

// Prepare the query to fetch levels based on the selected school
$sql = "SELECT DISTINCT level FROM course WHERE school = '$selectedSchool'";
$result = mysqli_query($conn, $sql);

// Fetch the levels and store them in an array
$levels = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $levels[] = $row["level"];
    }
}

// Return the levels as JSON
echo json_encode($levels);

// Close database connection
mysqli_close($conn);
?>
