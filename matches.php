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

// Fetch data from database
$sql = "SELECT id, name, email, interests, trip_details, reg_date FROM users ORDER BY reg_date DESC";
$result = $conn->query($sql);

// Display fetched data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='match'>";
        echo "<h3>" . htmlspecialchars($row["name"]) . "</h3>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row["email"]) . "</p>";
        echo "<p><strong>Interests:</strong> " . htmlspecialchars($row["interests"]) . "</p>";
        echo "<p><strong>Trip Details:</strong> " . htmlspecialchars($row["trip_details"]) . "</p>";
        echo "<p><strong>Registered Date:</strong> " . htmlspecialchars($row["reg_date"]) . "</p>";
        echo "</div>";
    }
} else {
    echo "No matches found.";
}

$conn->close();
?>