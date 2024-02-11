<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "task_management");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$age = $_POST['age'];
$abc = $_POST['abc'];
$xyz = $_POST['xyz'];

// Insert data into database
$sql = "INSERT INTO worksheet (name, email,email,email,email) 
VALUES ('$lname', '$fname','$age','$abc','$xyz')";
if (mysqli_query($conn, $sql)) {
	echo "Data saved successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
