<?php
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "names";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
		 
$sql = "select namelist from name";
$result = $conn->query($sql);

echo '<select name="namelist" size="5">'; // Just add size on the selection tag to become a listbox

// Loop through the query results, outputing the options one by one
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo '<option value="'.$row['namelist'].'">'.$row['namelist'].'</option>';
	}
}

echo '</select>';// Close your drop down box

?>