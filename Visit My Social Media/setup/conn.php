<?php
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social_media";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>