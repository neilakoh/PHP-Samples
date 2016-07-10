<?php
$dbuser = trim($_POST['dbuser']);
$dbpass = trim($_POST['dbpass']);
$dbhost = trim($_POST['dbhost']);
$dbname = trim($_POST['dbname']);

if (isset($_POST['submit']) && $dbuser=="" || $dbpass=="" || $dbhost=="" || $dbname=="" ){
	echo "Please fill out the database username, password, hostname and database name to connect.";
} else {
	//Create a connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	
	//Check connection
	if ($conn->connect_error)
	{
    	echo "Connection Faild. One of the variable is not correct!" . mysqli_connect_error();
		
	} else {
	
		echo "Connected successfully";
	}
	mysqli_close($conn);
}
?>