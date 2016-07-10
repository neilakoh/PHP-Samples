<?php
session_start();
include('setup/conn.php');

$password = trim($_POST['pass']);
$repass = trim($_POST['repass']);
$email = trim($_POST['email']);
$accId = trim($_GET['id']);

if(isset($_POST['submit']) || $email=="" || $password=="" || $repass==""){
	echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #005c5c; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='images/icons/error.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Error!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>Please fill out all the boxes. <br/>You will be redirected back after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=user_dashboard.php");
	die();
} else if ($password != $repass) {
	echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #005c5c; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='images/icons/error.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Error!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>Password Not Match. <br/>You will be redirected back after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=user_dashboard.php");
	die();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true){
	echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #005c5c; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='images/icons/error.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Error!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>Email Format Not Valid. <br/>You will be redirected back after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=user_dashboard.php");
	die();
} else {
	$sql = "UPDATE user_account SET password='$password', email='$email' WHERE id='$accId'";
	
	if ($conn->query($sql) === TRUE) {
		echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
		<div class='sidebar_title' style='font-size:40px; background-color: #005c5c; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
		<img src='images/icons/success.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Success!</span></div>
		<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
		<p class='processStats' style='position:relative; top:0px; text-align: center;'>Successfully Updated Profile Info. <br/>You will be redirected back after 5 seconds!</p>
		</div></div>";
		header("refresh:5; url=user_dashboard.php");
		die();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>