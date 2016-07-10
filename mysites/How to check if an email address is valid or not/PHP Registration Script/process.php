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

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Filter first if all boxes are fill out
if(isset($_POST['submit']) && $user=="" || $pass=="" || $mail=="" || $vpass=="" ){
	
	// Display message if one of the box is empty
	echo "Please enter all the boxes";

// Filter if the password boxes are exaclty the same
} else if ($pass != $vpass) {
	
	// Display this message if the two password boxes are not match
	echo "Your password didn't match!!";
	
// Check if email address is in the correct format
}else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) === true){
	
	// If email address is not correct then display this message
	echo "The email you entered is not valid!!";
	
// If all the conditions above are met then add the data from the input boxes to the database
} else {
	$sql = "INSERT INTO members (username, password, email) VALUES ('$user', '$pass', '$mail')";
	
	// Check the database connection and execute the SQL query
if ($conn->query($sql) === TRUE) {
	
	// Redirect this page to the confirmation page once data is added successfully.
    header("Location: success.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the connection
$conn->close();

?>