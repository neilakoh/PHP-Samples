<?php
session_start();
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
$cb = trim($_POST['captcha']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Insert value to database after the button is clicked
if(isset($_POST['submit']) && $user=="" || $pass=="" || $mail=="" || $vpass=="" || $cb==""){
echo "Please enter all the boxes";
} else if ($pass != $vpass) {
	echo "Your password didn't match!!";
}else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) === true){
	echo "The email you entered is not valid!!";
} else if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]!=$_POST["captcha"]){
	echo "Wrong Code Entered";
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