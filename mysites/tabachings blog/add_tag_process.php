<?php
session_start();
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabachings_blog";

// Declaire textbox values
$tag = trim($_POST['tag']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']) && $tag==""){
	
	echo "Please enter a tag or category name";

} else {
	$sql = "INSERT INTO tags (tagname) VALUES ('$tag')";
	
	if ($conn->query($sql) === TRUE) {

	echo "<p>Tag Successfully Added!! <br /><br /><a href='add_tag.php'>Add Another Tag</a><br /><a href='add_post.php'>Add Blog Post</a><br /><a href='adminaccount.php'>View Dashboard</a></p>";
	
    die();
	
}	else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

// Close the connection
$conn->close();

?>