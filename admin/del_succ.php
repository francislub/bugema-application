<?php
$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM application_form WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: succ_app.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
