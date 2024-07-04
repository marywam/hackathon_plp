<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelbuddy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (name, email, interests, trip_details) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $interests, $trip_details);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$interests = $_POST['interests'];
$trip_details = $_POST['trip_details'];
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

// Redirect back to the homepage
header("Location: index.php");
exit();
?>
