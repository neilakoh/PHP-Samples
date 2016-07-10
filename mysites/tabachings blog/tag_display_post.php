<?php
session_start(); // Starting Session

// Check if session is active or not
if(!isset($_SESSION['userlog'])) {  
$_SESSION['userlog']=NULL; 

echo "Sorry you are no longer active. Please <a href='login.php'>login</a> again."; 
die(); 
}

else

// Getting MySQL database info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabachings_blog";
$login_session="";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Assigning session to a variable to verify session
$user_check = $_SESSION['userlog'];

// Verify if session value exist in the database
$sessionquery = "select username from admin_account where username='$user_check'";

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
<title>Tabaching's Blog: Admin Account Page</title>
<head></head>
<body>

Welcome Admin: <b><?php $passid = trim($_GET['id']); echo $login_session ?></b> !!
<br>
<a href="adminaccount.php">Dashboard</a> | <a href="add_post.php">Add Post</a> | <a href="edit_profile.php">Edit Profile</a> | <a href="logout.php">Logout</a>
<br />
<br />
<b><h1>Related Post of the category: <?php echo $passid ?></h1></b>

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

$passid = trim($_GET['id']);
		 
$selectpost = "SELECT * FROM posts WHERE post_tag  LIKE '%$passid%' ORDER BY date_published DESC";
$result = $conn->query($selectpost);


if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$pid = $row['id'];
		$pttl =$row['post_title'];
		$ptg =$row['post_tag'];
		$pctn =$row['post_content'];
		$dtpub =$row['date_published'];
		$modified =$row['post_update'];
		
		$exploded_tags = explode(",", $ptg);
		
		echo "<p><b><h3 style='color:red;'>$pttl</h3></b></p>";
		foreach( $exploded_tags as $elem ) {
			echo "<a href='tag_display_post.php?id=$elem'>$elem</a>&nbsp;";
		}
		echo"| Published on: $dtpub | Modified last: $modified<br/><a href='edit_post.php?id=$pid'>Edit Post</a> | <a href='delete_post.php?id=$pid'>Delete Post</a><br/></p>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>