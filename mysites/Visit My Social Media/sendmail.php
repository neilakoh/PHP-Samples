<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$security = trim($_POST['security']);

if(isset($_POST['submit']) || $email=="" || $name=="" || $message=="" || $security==""){
	echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #222; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='error.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Unable to Send Message!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>Please fill out all the boxes to send a message. <br/>You will be redirected after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=index.php");
	die();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true){
	echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #222; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='error.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Unable to Send Message!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>The email you entered is invalid. Please enter a correct email address. <br/>You will be redirected after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=index.php");
	die();
} else if ($security != 10) {
	echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #222; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='error.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Unable to Send Message!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>For security purposes please answer the question correctly. <br/>You will be redirected after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=index.php");
	die();
} else {
	$from="From: $name<$email>\r\nReturn-path: $email";
    $subject="A Message from Social Media Profile Button Connector";
    mail("neilanthony.blog@gmail.com", $subject, $message, $from);
    echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #222; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='success.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Message Successfully Sent!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>You have successfully sent the message. <br/>You will be redirected after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=index.php");
	die();
}
?>