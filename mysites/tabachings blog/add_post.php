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
<title>Tabaching's Blog: Add Post Page</title>
<head></head>
<body>

<script src="nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor({fullPanel : true}).panelInstance('post_content');
});
</script>


Welcome Admin: <b><?php echo $login_session ?></b> !!
<br />
<a href="adminaccount.php">Dashboard</a> | <a href="add_post.php">Add Post</a> | <a href="edit_profile.php">Edit Profile</a> | <a href="logout.php">Logout</a>
<br /><br />

<form action="search_display_post.php" method="post" enctype="multipart/form-data">

    <label>Search Post:
      <input type="text" name="search" id="search" value="<?php $search?>">
    </label>
 
 <input type="submit" name="searchpost" id="searchpost" value="Search Post">
</form><hr />

<h1>Add Post</h1>
<br />

<form action="updated_add_post.php" method="post" enctype="multipart/form-data">

<p>
    <label>Post Title:
      <input type="text" name="post_title" id="post_title" value="<?php $post_title?>">
    </label>
</p>

<br />

<p>
	<label>Select Thumbnail:<br />
      <input type="file" name="thumbfile" id="thumbfile">
    </label><br /><br />
	<a href="image_validate.php" target="_new">Validate Image</a>
</p>

<br />

<p>
    <label>Enter tag/category (separated by comma):<br />
      <input type="text" name="tagname" id="tagname" value="<?php $tagname?>">
    </label>
</p>

<br />
<br />
<p>
    <label>Post Content:<br/>
      <textarea type="text" name="post_content" id="post_content" style="width: 100%;" rows="20" value="<?php $post_content?>"></textarea>
    </label>
	
</p>
<br />
<input type="submit" name="publish_post" id="publish_post" value="Publish Post" style="position:relative; float: right;">
<br />
</form>
</body>
</html>