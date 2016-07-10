<?php

session_start();

if(!isset($_SESSION['login_user'])) {  
$_SESSION['login_user']=NULL; 

echo "<p align='center'><font face='Tahoma' size='6'>You are not Logged in.  Please <a href='login.php'>Login</a></font></p>"; 
die(); 
}

else

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "work";
$login_session="";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$user_check = $_SESSION['login_user'];

$sessionquery = "select username from members where username='$user_check'";

$result = $conn->query($sessionquery);

if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION['login_user']= $user_check;
			$login_session = $_SESSION['login_user'];
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>