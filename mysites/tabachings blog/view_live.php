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
$ptitle = trim($_GET['title']);

$viewpost = "SELECT * FROM posts WHERE id = '$passid'";
$result = $conn->query($viewpost);

$conn->close();
?>

<html>

<title><?php $ptitle = trim($_GET['title']); echo $ptitle?> : Tabaching's Blog</title>

<head>

</head>

<body>
<h3>Welcome to Tabaching's Blog</h3>
<p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
<hr />
<?php
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
		
		echo "<b>Category: </b>";
		foreach( $exploded_tags as $elem ) {
			echo "<a href='tag_display_post.php?id=$elem'>$elem</a>&nbsp;";
		}
		echo "<p><b><h1 style='color:red;'>$pttl</h1></b></p>";
		echo "<p>$pctn</p>";
		echo"<p>Published on: $dtpub</p>";
    }
} else {
    echo "0 results";
}
?>

<hr />

</body>

</html>