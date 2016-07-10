<?php
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "text_messages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
		 
$sql = "select texts from messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$msg =$row['texts'];
		
		echo "<p style='color:red;'>$msg</p>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>