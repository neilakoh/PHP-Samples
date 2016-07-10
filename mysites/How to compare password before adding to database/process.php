<?php
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work";

// Declaire textbox values
$user = trim($_POST['username']);
$pass = trim($_POST['password']);
$mail = trim($_POST['email']);
$vpass = trim($_POST['verifypass']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Insert value to database after the button is clicked
if(isset($_POST['submit']) && $user=="" || $pass=="" || $mail=="" || $vpass=="" ){
echo "Please enter all the boxes";
} else if ($pass != $vpass) {
	echo "Your password didn't match!!";
} else {
	$sql = "INSERT INTO members (username, password, email) VALUES ('$user', '$pass', '$mail')";
	
	// Check database connection
if ($conn->query($sql) === TRUE) {
    header("Location: success.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the connection
$conn->close();

?>