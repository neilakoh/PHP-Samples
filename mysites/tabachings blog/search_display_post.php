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

Welcome Admin: <b><?php echo $login_session ?></b> !!
<br>
<a href="adminaccount.php">Dashboard</a> | <a href="add_post.php">Add Post</a> | <a href="edit_profile.php">Edit Profile</a> | <a href="logout.php">Logout</a>
<br />
<br />
<form action="search_display_post.php" method="post">

    <label>Search Post:
      <input type="text" name="search" id="search" value="<?php $search?>">
    </label>
 
 <input type="submit" name="searchpost" id="searchpost" value="Search Post">
</form>
<hr />
<b><h1>Search Result related to: <?php $search = trim($_POST['search']); echo $search?></h1></b>

<?php
// Add the database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabachings_blog";

// Declairing login input value
$search = trim($_POST['search']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection if error occurs
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} else {
		$page=1; 
	};
	
	$start_from = ($page-1) * 10;

$selectpost = "SELECT * FROM posts WHERE post_title LIKE '%$search%' ORDER BY date_published DESC LIMIT $start_from, 10";
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
		
		echo "<b><h3 style='color:red;'>$pttl</h3></b>";
		foreach( $exploded_tags as $elem ) {
			echo "<a href='tag_display_post.php?id=$elem'>$elem</a>&nbsp;";
		}
		echo"| Published on: $dtpub | Modified last: $modified<br/><a href='edit_post.php?id=$pid'>Edit Post</a> | <a href='delete_post.php?id=$pid'>Delete Post</a><br/></p>";
	}
	
	$countdata = "SELECT COUNT(post_content) FROM posts WHERE post_title LIKE '%$search%'";
	$countresult = $conn->query($countdata);
	$countrow = mysqli_fetch_row($countresult); 
	$total_records = $countrow[0];
	
	$total_pages = ceil($total_records / 10);
	
	echo "<br /><br />";
	
	for ($i=1; $i<=$total_pages; $i++) { 
	
	echo "<a href='search_post_scan.php?page=".$i."&term=$search'>".$i."</a> "; 

	};
}
?>

</body>
</html>