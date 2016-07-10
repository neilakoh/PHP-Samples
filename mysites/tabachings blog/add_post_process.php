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
$author = $_SESSION['userlog'];
//$thumbfile = trim($_POST['thumbfile']);


// Verify if session value exist in the database
$sessionquery = "select username from admin_account where username='$author'";

// Execute the query and assigned it to a value called result
$result = $conn->query($sessionquery);

// Fetching the session value from the database if it exist in the database
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
			// Re-assign the session
			$_SESSION['userlog']= $author;
			
			// Pass the session value for usage
			$login_session = $_SESSION['userlog'];
    }
}

if(!isset($_POST['thumbfile']))
{
  $thumbfile = "default.jpg";
} else {
  $thumbfile = trim($_POST['thumbfile']);
}

if($_FILES['thumbfile']['name'])
{
	//if no errors...
	if(!$_FILES['thumbfile']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['thumbfile']['tmp_name']); //rename file
		if($_FILES['thumbfile']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			echo "Oops!  Your file\'s size is to large.";
		} else { 
			$valid_file = true; 
		}
	}
		
		//if the file has passed the test
		if($valid_file)
		{
			$currentdir = getcwd();
			$target = $currentdir .'/thumbs/' . basename($_FILES['thumbfile']['name']);
			
			if (file_exists($target)) {
				
				//echo "Filed to upload thumbnail, same filename already exist.<br/>Please edit your post and upload a different thumbnail with different filename.";
				
				if (file_exists($target)) {
					$name = pathinfo($_FILES['thumbfile']['name'], PATHINFO_FILENAME);
					$extension = pathinfo($_FILES['thumbfile']['name'], PATHINFO_EXTENSION);
					
					$increment = ''; //start with no suffix
					
					while(file_exists($name . $increment . '.' . $extension)) {
						$increment++;
					}
					$basename = $name . $increment . '.' . $extension;
				}
				
				$sql = "INSERT INTO posts (post_title, post_tag, post_content, date_published, author, thumbFile) VALUES ('$post_title', '$tagname', '$post_content', '$pubdate', '$login_session', '$basename')";
	
	if ($conn->query($sql) === TRUE) {

	echo "<p>Post Successfully Published!!<br /><br /><a href='add_tag.php'>Add Another Tag</a><br /><a href='add_post.php'>Add Blog Post</a><br /><a href='adminaccount.php'>View Dashboard</a></p>";
	
    die();
	
}	else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}
				
			} else {
				move_uploaded_file($_FILES['thumbfile']['tmp_name'], $target);
				
				$sql = "INSERT INTO posts (post_title, post_tag, post_content, date_published, author, thumbFile) VALUES ('$post_title', '$tagname', '$post_content', '$pubdate', '$login_session', '$thumbfile')";
	
	if ($conn->query($sql) === TRUE) {

	echo "<p>Post Successfully Published!!<br /><br /><a href='add_tag.php'>Add Another Tag</a><br /><a href='add_post.php'>Add Blog Post</a><br /><a href='adminaccount.php'>View Dashboard</a></p>";
	
    die();
	
}	else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}
				
				echo "Congratulations!  Your file was accepted.";
			}
		}
	}
	//if there is an error...
	else
	{
		echo "No thumbnail uploaded. Default thumbnail will be selected.";
	}

// Close the connection
$conn->close();

?>