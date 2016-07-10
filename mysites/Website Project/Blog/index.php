<?php
//Start the session in order to determine if the user is logged in or not
session_start();

// If user
if(!isset($_SESSION['userlog'])) {
	
	//Is not logged in or no active session exist
$_SESSION['userlog']=NULL; 

	//User will be redirected to the no active user home page where user can see login and register option
	header("Location: home.php?page=1");
	die();
}

//If user is current logged in
else
	
	//They will be redirected to the active user home page where they can see dashboard in the navigation option
	header("Location: main.php?page=1");
?>