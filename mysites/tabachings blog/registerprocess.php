<?php
session_start();
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabachings_blog";

// Declaire textbox values
$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
$email = trim($_POST['email']);
$adminuser = trim($_POST['adminuser']);
$adminpass = trim($_POST['adminpass']);
$repeatpass = trim($_POST['repeatpass']);
$captcha = trim($_POST['captcha']);
$bdate = trim($_POST['bdate']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Filter first if all boxes are filled out
if(isset($_POST['submit']) || $fname=="" || $lname=="" || $email=="" || $adminuser=="" || $adminpass=="" || $repeatpass=="" || $captcha=="" || $bdate==""){
	
	// Display message if one of the box is empty
	echo "Please fill out all the boxes";

// Filter if the password boxes are exaclty the same
} else if ($adminpass != $repeatpass) {
	
	// Display this message if the two password boxes are not match
	echo "Your password didn't match!!";
	
// Check if email address is in the correct format
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true){
	
	// If email address is not correct then display this message
	echo "The email you entered is not valid!!";
	
} else if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]!=$_POST["captcha"]){
	echo "Wrong Code Entered";
	
// If all the conditions above are met then add the data from the input boxes to the database
} else {
	$sql = "INSERT INTO admin_account (lname, fname, email, username, password, birthdate) VALUES ('$lname', '$fname', '$email', '$adminuser', '$adminpass', '$bdate')";
	
	// Check the database connection and execute the SQL query
if ($conn->query($sql) === TRUE) {
	
	// Display Message once data is added
	echo "<p>Account Successfully Created!! You can login now by clicking the link below. <br /><br /><a href='index.php'>Login Now</a></p>";
    die();
	
}	else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

// Close the connection
$conn->close();


?>