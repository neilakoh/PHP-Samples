<?php
session_start();
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

// Declaire textbox values
$post_title = trim($_POST['post_title']);
$tagname = trim($_POST['tagname']);
$post_content = mysqli_real_escape_string($conn, $_POST['post_content']);
$pubdate = date('Y-m-d H:i:s');

$passid = trim($_GET['id']);

if(isset($_POST['submit']) && $post_title==""){
	
	echo "Please enter a post title";

} else {
	$sql = "UPDATE posts SET post_title = '$post_title', post_tag = '$tagname', post_content = '$post_content', post_update = '$pubdate' WHERE id='$passid'";
	
	if ($conn->query($sql) === TRUE) {

	echo "<p>Post Successfully Updated!!<br /><br /><a href='add_tag.php'>Add Another Tag</a><br /><a href='add_post.php'>Add Blog Post</a><br /><a href='adminaccount.php'>View Dashboard</a></p>";
	
    die();
	
}	else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

// Close the connection
$conn->close();

?>