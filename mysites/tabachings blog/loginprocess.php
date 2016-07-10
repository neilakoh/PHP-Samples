<?php
session_start(); // Starting Session

// Getting MySQL database info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabachings_blog";

// Declairing login input value
$user = trim($_POST['username']);
$pass = trim($_POST['password']);

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if there is no connection available
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Test if all required boxes are filled out
if(isset($_POST['submit']) && $user=="" || $pass==""){
echo "Username or Password is invalid. <br /><br /><a href='login.php'>Back to the login page</a>";
}
else
{
	// Check database if username and password exist
	$sql = "select username,password from admin_account where password='$pass' AND username='$user'";
	$result = $conn->query($sql);
	
	// Fetching data from database
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
			// Assigning username to a session if data exist in the database
			$_SESSION['userlog']=$user;
			
			// Redirect user to his profile
			header("location: adminaccount.php");
    } 
	}else {
		echo "No user found. Back to <a href='index.php'>Login</a> again.";
	}
}

?>