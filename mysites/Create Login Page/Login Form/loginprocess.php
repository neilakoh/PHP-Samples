<?php
session_start(); // Starting Session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work";

$user = trim($_POST['username']);
$pass = trim($_POST['password']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']) && $user=="" || $pass==""){
echo "Username or Password is invalid";
}
else
{
	$sql = "select username,password from members where password='$pass' AND username='$user'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION['login_user']=$user;
			header("location: profile.php");
    } 
	}else {
		echo "no user found";
	}
}

// Close the connection
$conn->close();
?>