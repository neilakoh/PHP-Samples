<?php
$connpath = $_SERVER['DOCUMENT_ROOT'];
$connpath .= "mysites/Widget Factory/setup/conn.php";
include($connpath);

$username = trim($_POST['username']);
$password = trim($_POST['password']);
$repassword = trim($_POST['repassword']);
$email = trim($_POST['email']);
$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Register Result</title>
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

if(isset($_POST['submit']) || $username=="" || $password=="" || $repassword=="" || $email=="" || $fname=="" || $lname==""){
	echo "<div class='wrapper_login'>
	<div class='title' style='font-size:40px;'>
	<img src='images/warning.png' style='position: relative; top: -5px;'> Warning!</div>
	<div class='message' style='height:115px; padding:10px; padding-top:20px; text-align: center;'>
	<p class='processStats' style='text-align: center; font-size: 26px; margin-top:50px;'>Please fill out all the boxes!<br/>You will be redirected in 5 sec.<br />
	</div></div>";
	
	header("refresh:5; url=index.php");
	die();
} else if ($password != $repassword) {
	echo "<div class='wrapper_login'>
	<div class='title' style='font-size:40px;'>
	<img src='images/warning.png' style='position: relative; top: -5px;'> Warning!</div>
	<div class='message' style='height:115px; padding:10px; padding-top:20px; text-align: center;'>
	<p class='processStats' style='text-align: center; font-size: 26px; margin-top:50px;'>Your Password didn't match!<br/>You will be redirected in 5 sec.<br />
	</div></div>";
	
	header("refresh:5; url=index.php");
	die();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true){
	echo "<div class='wrapper_login'>
	<div class='title' style='font-size:40px;'>
	<img src='images/warning.png' style='position: relative; top: -5px;'> Warning!</div>
	<div class='message' style='height:115px; padding:10px; padding-top:20px; text-align: center;'>
	<p class='processStats' style='text-align: center; font-size: 26px; margin-top:50px;'>Your E-Mail is not a valid format!<br/>You will be redirected in 5 sec.<br />
	</div></div>";
	
	header("refresh:5; url=index.php");
	die();
} else {
	$sql = "INSERT INTO admin_access (username, password, email, fname, lname) VALUES ('$username', '$password', '$email', '$fname', '$lname')";
	
	if ($conn->query($sql) === TRUE) {
		
		$from="From: Widget Factory<$email>\r\nReturn-path: $email";
		$subject="Widget Factory Admin Information";
		$message="Username: $username<br/>Password: $password";
		mail("$email", $subject, $message, $from);
		
		echo "<div class='wrapper_login'>
		<div class='title' style='font-size:40px;'>
		<img src='images/success.png' style='position: relative; top: -5px;'> Warning!</div>
		<div class='message' style='height:115px; padding:10px; padding-top:20px; text-align: center;'>
		<p class='processStats' style='text-align: center; font-size: 26px; margin-top:50px;'>Congratulations! You have successfully created your admin account!<br/>You will be redirected in 5 sec.<br />
		</div></div>";
		
		header("refresh:5; url=index.php");
		die();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>

</body>
</html>