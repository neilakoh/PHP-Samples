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
<a href="profile.php">Profile</a> | <a href="editprofile.php">Edit Account Info</a> | <a href="logout.php">Logout</a><br>
<br>
<b>Edit Your Account Information Below:</b><br />

<?php

// Getting MySQL database info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

$displayinfo = "SELECT accid, fname, lname, email, username, password FROM accountinfo where username='$user_check'";
$result = $conn->query($displayinfo);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$idtemp =$row['accid'];
		$fnametemp = $row["fname"];
		$lnametemp = $row["lname"];
		$emailtemp = $row["email"];
		$usernametemp = $row["username"];
		$passwordtemp = $row["password"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<form action="editaccoutprocess.php" method="post">
  <input type="text" name="idtemp" id="idtemp" value="<?php echo $idtemp;?>" style="display: none">
  <p><br />First Name: <input type="text" name="fnametemp" id="fnametemp" value="<?php echo $fnametemp;?>">
  <br />Last Name: <input type="text" name="lnametemp" id="lnametemp" value="<?php echo $lnametemp;?>">
  <br />Email Address: <input type="text" name="emailtemp" id="emailtemp" value="<?php echo $emailtemp;?>">
  <br />Username: <input type="text" name="usernametemp" id="usernametemp" value="<?php echo $usernametemp;?>">
  <br />Password: <input type="password" name="passwordtemp" id="passwordtemp" value="<?php echo $passwordtemp;?>">
  </p>
  <p>
    <input type="submit" name="editacc" id="editacc" value="Save Changes">
  </p>
</form>
</body>
</html>