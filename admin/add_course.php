<?php
require_once 'config.php';

// Check if form is submitted
if(isset($_POST['create'])) {

    // Retrieve form data
    $course = $_POST['course'];
    $school = $_POST['school'];
    $level = $_POST['level'];

    // Insert data into database
    $sql = "INSERT INTO course (course, level, school) VALUES ('$course', '$level', '$school')";

    if (mysqli_query($conn, $sql)) {
        header('Location: course.php');

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
