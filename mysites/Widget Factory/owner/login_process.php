<?php
session_start();
$connpath = $_SERVER['DOCUMENT_ROOT'];
$connpath .= "mysites/Widget Factory/setup/conn.php";
include($connpath);

$username = trim($_POST['username']);
$password = trim($_POST['password']);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Login Result</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<script src="ui-bootstrap-tpls-0.14.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
<script type='text/javascript' src='myapp.js'></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>

<body>

<?php

if(isset($_POST['submit']) && $username=="" || $password==""){
	echo "<div class='wrapper_login'>
	<div class='title' style='font-size:40px;'>
	<img src='images/warning.png' style='position: relative; top: -5px;'> Warning!</div>
	<div class='message' style='height:115px; padding:10px; padding-top:20px; text-align: center;'>
	<p class='processStats' style='text-align: center; font-size: 26px; margin-top:50px;'>Please fill out all the boxes!<br/>You will be redirected in 5 sec.<br />
	</div></div>";
	
	header("refresh:5; url=index.php");
	die();
} else {
	$getAccount = "select * from admin_access where password='$password' AND username='$username'";
	$result = $conn->query($getAccount);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
								
			// Assigning username to a session if data exist in the database
			$_SESSION['adminlog']=$username;
										
			// Redirect user to his profile
			header("location: empire.php");
		}
	} else {
		echo "<div class='wrapper_login'>
		<div class='title' style='font-size:40px;'>
		<img src='images/warning.png' style='position: relative; top: -5px;'> Warning!</div>
		<div class='message' style='height:115px; padding:10px; padding-top:20px; text-align: center;'>
		<p class='processStats' style='text-align: center; font-size: 26px; margin-top:50px;'>User Not Found!<br/>You will be redirected in 5 sec.<br />
		</div></div>";
		
		header("refresh:5; url=index.php");
		die();
	}
}

?>

</body>
</html>