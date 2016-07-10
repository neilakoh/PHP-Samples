<?php
session_start(); // Starting Session

// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

// Declaire textbox values
$id = trim($_POST['idtemp']);
$fname = trim($_POST['fnametemp']);
$lname = trim($_POST['lnametemp']);
$email = trim($_POST['emailtemp']);
$reguser = trim($_POST['usernametemp']);
$regpass = trim($_POST['passwordtemp']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true){
	
	// If email address is not correct then display this message
	echo "The email you entered is not valid!!";
	
// If all the conditions above are met then add the data from the input boxes to the database
} else {
	$sql = "UPDATE accountinfo SET fname='$fname', lname='$lname', email='$email', username='$reguser', password='$regpass' WHERE accid='$id'";
	
	// Check the database connection and execute the SQL query
if ($conn->query($sql) === TRUE) {
	
	// Display Message once data is added
    echo "Changes Saved Successfully! Check your <a href='profile.php'>Profile</a> now";
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the connection
$conn->close();


?>