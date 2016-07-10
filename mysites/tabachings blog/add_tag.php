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
<title>Tabaching's Blog: Add Category Page</title>
<head></head>
<body>

Welcome Admin: <b><?php echo $login_session ?></b> !!
<br>
<a href="adminaccount.php">Dashboard</a> | <a href="add_post.php">Add Post</a> | <a href="add_tag.php">Add Categories or Tag</a> | <a href="edit_profile.php">Edit Profile</a> | <a href="logout.php">Logout</a>
<br />
<br />
<form action="add_tag_process.php" method="post">

  <p>
    <label>Enter Tag/Category Name:
      <input type="text" name="tag" id="tag" value="<?php $tag?>">
    </label>
  </p>
  
    <input type="submit" name="addtag" id="addtag" value="Save Tag">
</form>

</body>
</html>