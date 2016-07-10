<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabachings_blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

$passid = trim($_GET['id']);

$dataretrieve = "SELECT id FROM posts WHERE id ='$passid'";
$result = $conn->query($dataretrieve);

if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$deletepost = "DELETE FROM posts WHERE id = '$passid'";
			$result2 = $conn->query($deletepost);
			
			echo "Post Successfully Deleted!!";
		}
	}
?>