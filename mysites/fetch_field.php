

<?php

// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabachings_blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

$tagsidebar = "SELECT tagname FROM tags";
$result = $conn->query($tagsidebar);

$id1 = array();

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = $row['tagname'];
  // Append to the array...
  $id1[] = $id;
  }

// Call array_unique() outside the loop:
$id2 = array_unique($id1);
foreach ($id2 as $value)
{
  echo $value . "<br>";

	} 
}


$conn->close();
?>