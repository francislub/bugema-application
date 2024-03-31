<?php
require_once 'config.php';
// Create connection
//$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error . $conn->error);
//}

if(isset($_POST['login'])) {
	$id = $_POST['id_number'];
	$app_code = $_POST['app_id'];

	// Check if user exists in database
	$sql = "SELECT * FROM admin WHERE id_number = '$id' AND app_id = '$app_code'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	
	if(mysqli_num_rows($result) == 1) {
		// User exists, redirect to dashboard
		header("Location: ./user/index.php" . $row['id_number']);
		exit();
	} else {
		// User does not exist or login details are incorrect
		echo "<p>Invalid login details. Please try again.</p>";
	}
}

$conn->close();
?>
