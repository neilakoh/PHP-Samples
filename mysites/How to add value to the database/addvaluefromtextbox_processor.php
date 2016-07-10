<?php
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work";

// Declaire textbox values
$user = $_POST['username'];
$pass = $_POST['password'];
$mail = $_POST['email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Insert value to database after the button is clicked
if(isset($_POST['submit'])){
$sql = "INSERT INTO members (username, password, email) VALUES ('$user', '$pass', '$mail')";
}

// Check database connection
if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/mysites/addingvalue/addvaluefromtextbox_success.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>