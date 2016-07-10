<?php
// Add the database connection information
$servername = "mysql.serversfree.com";
$username = "u202176542_test";
$password = "123456";
$dbname = "u202176542_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

$passkey = trim($_GET['passkey']);

$dataretrieve = "SELECT * FROM members WHERE activation ='$passkey'";
$result = $conn->query($dataretrieve);

if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$username = $row['username'];
			$password = $row['password'];
			$email = $row['email'];
			
			$sql = "INSERT INTO registered_members (username, password, email) VALUES ('$username', '$password', '$email')";
			$result2 = $conn->query($sql);
			
			echo "account successfully activated";

		}
	}
	
	$dataretrieve2 = "SELECT * FROM registered_members WHERE email ='$email'";
	$result3 = $conn->query($dataretrieve2);
	
	if ($result3->num_rows > 0) {
		while($row2 = $result3->fetch_assoc()) {
			
			$deletefrommember = "DELETE FROM members WHERE activation = '$passkey'";
			$result4 = $conn->query($deletefrommember);
		}
	}
?>