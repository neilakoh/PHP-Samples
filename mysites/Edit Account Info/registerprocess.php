<?php
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

// Declaire textbox values
$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
$email = trim($_POST['email']);
$reguser = trim($_POST['reguser']);
$regpass = trim($_POST['regpass']);
$repeatpass = trim($_POST['repeatpass']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Filter first if all boxes are filled out
if(isset($_POST['submit']) && $fname=="" || $lname=="" || $email=="" || $reguser=="" || $regpass=="" || $repeatpass=="" ){
	
	// Display message if one of the box is empty
	echo "Please fill out all the boxes";

// Filter if the password boxes are exaclty the same
} else if ($regpass != $repeatpass) {
	
	// Display this message if the two password boxes are not match
	echo "Your password didn't match!!";
	
// Check if email address is in the correct format
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true){
	
	// If email address is not correct then display this message
	echo "The email you entered is not valid!!";
	
// If all the conditions above are met then add the data from the input boxes to the database
} else {
	$sql = "INSERT INTO accountinfo (lname, fname, email, username, password) VALUES ('$lname', '$fname', '$email', '$reguser', '$regpass')";
	
	// Check the database connection and execute the SQL query
if ($conn->query($sql) === TRUE) {
	
	// Display Message once data is added
    echo "<p>Account Successfully Created!! You can login now by clicking the link below. <br /><br /><a href='index.php'>Login Now</a></p>";
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the connection
$conn->close();


?>