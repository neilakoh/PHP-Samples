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
<b><h1>Post List:</h1></b>

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

if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} else {
		$page=1; 
	}; 

	$start_from = ($page-1) * 10;
		 
$displaypost = "SELECT * FROM posts ORDER BY date_published DESC LIMIT $start_from, 10";
$result = $conn->query($displaypost);

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
		
		echo "<p><b><h3><a href='view_live.php?id=$pid&title=$pttl' target='_new' style='color:red; text-decoration:none;'>$pttl</a></h3></b></p>";
		foreach( $exploded_tags as $elem ) {
			echo "<a href='tag_display_post.php?id=$elem'>$elem</a>&nbsp;";
		}
		echo " | Published on: $dtpub | Modified last: $modified<br/><a href='edit_post.php?id=$pid'>Edit Post</a> | <a href='delete_post.php?id=$pid'>Delete Post</a> | <a href='view_live.php?id=$pid&title=$pttl' target='_new'>View Live</a><br/></p>";
    }
	
	$countdata = "SELECT COUNT(post_content) FROM posts";
	$countresult = $conn->query($countdata);
	$countrow = mysqli_fetch_row($countresult); 
	$total_records = $countrow[0];
	
	$total_pages = ceil($total_records / 10);
	
	echo "<br /><br />";
	
	for ($i=1; $i<=$total_pages; $i++) { 
	
	echo "<a href='adminaccount.php?page=".$i."'>".$i."</a> "; 

	};
	
} else {
    echo "0 results";
}
$conn->close();

?>
<hr />
<h2>Category List:</h2>

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

//Selecting all data under the database field post_tag from the table posts
$tagsidebar = "SELECT post_tag FROM posts";
$result2 = $conn->query($tagsidebar);

//Creating an array variable for the where the database items will be stored
$collecttag = array();

//SQL query execution
if ($result2->num_rows > 0) {
	
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
		
		//Assign the database item to a variable
		$ptg2 =$row2['post_tag'];
		
		//Set the database variable to an array
		$collecttag[] = $ptg2;
		
	}
	
	//Converting the array in to string
	$string = implode(",",$collecttag); // This will convert array to string in order for the variable to be assigned in to explode function
	
	//Explode the string in order to separate the database items and remove the comma
	$explode = array_unique(explode(",", $string));
	
	//Display the items
	foreach( $explode as $elem2 ) {
		echo "<a href='tag_display_post.php?id=$elem2'>$elem2</a> | ";
	}
	
}
$conn->close();
?>

</body>
</html>