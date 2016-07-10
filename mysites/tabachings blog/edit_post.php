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
<a href="adminaccount.php">Dashboard</a> | <a href="add_post.php">Add Post</a> | <a href="add_tag.php">Add Categories or Tag</a> | <a href="edit_profile.php">Edit Profile</a> | <a href="logout.php">Logout</a>
<br />
<h1>Edit Post</h1>
<br />

<?php

// Getting MySQL database info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabachings_blog";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

$passid = trim($_GET['id']);

$displayinfo = "SELECT * FROM posts where id='$passid'";
$result = $conn->query($displayinfo);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$posttitle =$row['post_title'];
		$postcontent = $row['post_content'];
		$posttag = $row['post_tag'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<form action="edit_post_process.php?id=<?php echo $passid;?>" method="post">

<p>
    <label>Post Title:
      <input type="text" name="post_title" id="post_title" value="<?php echo $posttitle;?>">
    </label>
</p>

<br />

<p>
    <label>Enter tag/category (separated by comma):<br />
      <input type="text" name="tagname" id="tagname" value="<?php echo $posttag?>">
    </label>
</p>

<br />
<br />
<p>
    <label>Post Content:<br/>
      <textarea type="text" name="post_content" id="post_content" style="width: 100%;" rows="20"><?php echo $postcontent;?></textarea>
    </label>
</p>
<br />
<input type="submit" name="update_post" id="update_post" value="Save Changes" style="position:relative; float: right;">
<br />
</form>

</body>
</html>