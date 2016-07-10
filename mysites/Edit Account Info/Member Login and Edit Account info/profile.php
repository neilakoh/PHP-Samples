<?php
session_start(); // Starting Session

// Check if session is active or not
if(!isset($_SESSION['userlog'])) {  
$_SESSION['userlog']=NULL; 

echo "Sorry you are no longer active. Please <a href='index.php'>login</a> again."; 
die(); 
}

else

// Getting MySQL database info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";
$login_session="";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Assigning session to a variable to verify session
$user_check = $_SESSION['userlog'];

// Verify if session value exist in the database
$sessionquery = "select username from accountinfo where username='$user_check'";

// Execute the query and assigned it to a value called result
$result = $conn->query($sessionquery);

// Fetching the session value from the database if it exist in the database
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
			// Re-assign the session
			$_SESSION['userlog']= $user_check;
			
			// Pass the session value for usage
			$login_session = $_SESSION['userlog'];
    }
}
$conn->close();
?>

<html>
<title></title>
<head></head>
<body>

Welcome: <b><?php echo $login_session ?></b> !!
<br>
<a href="editprofile.php">Edit Account Info</a> | <a href="logout.php">Logout</a><br>
<br>
<b>Below is your account information:</b><br />

<?php

// Getting MySQL database info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

$displayinfo = "SELECT fname, lname, email, username FROM accountinfo where username='$user_check'";
$result = $conn->query($displayinfo);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br/><b>First Name:</b> " . $row["fname"]. "<br/><b>Last Name:</b> " . $row["lname"]. "<br/><b>Email Address:</b> " . $row["email"]. "<br/><b>Username:</b> " .$row["username"] . "<br/>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>