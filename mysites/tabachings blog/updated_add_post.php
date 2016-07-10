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
$th = $_FILES['thumbfile'];
$thumbfile = $th['name'];

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

//if they DID upload a file...
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
				echo "Failed to upload the exact thumbnail, same filename already exist so default thumbnail will be applied.<br/>Please edit your post and upload a different thumbnail with different filename.";
				
				
				$sql = "INSERT INTO posts (post_title, post_tag, post_content, date_published, author, thumbFile) VALUES ('$post_title', '$tagname', '$post_content', '$pubdate', '$login_session', '$basename')";
				if ($conn->query($sql) === TRUE) {
					echo "<p>Post Successfully Published!!<br /><br /><a href='add_tag.php'>Add Another Tag</a><br /><a href='add_post.php'>Add Blog Post</a><br /><a href='adminaccount.php'>View Dashboard</a></p>";
					die();
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			} else {
				move_uploaded_file($_FILES['thumbfile']['tmp_name'], $target);
				$sql = "INSERT INTO posts (post_title, post_tag, post_content, date_published, author, thumbFile) VALUES ('$post_title', '$tagname', '$post_content', '$pubdate', '$login_session', '$thumbfile')";
				if ($conn->query($sql) === TRUE) {
					echo "<p>Post Successfully Published!!<br /><br /><a href='add_tag.php'>Add Another Tag</a><br /><a href='add_post.php'>Add Blog Post</a><br /><a href='adminaccount.php'>View Dashboard</a></p>";
					die();
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
	}
	//if there is an error...
	else
	{
		echo "No thumbnail was uploaded. Default thumbnail will be used. You can change it by editing the post.";
		$sql = "INSERT INTO posts (post_title, post_tag, post_content, date_published, author, thumbFile) VALUES ('$post_title', '$tagname', '$post_content', '$pubdate', '$login_session', 'default.jpg')";
		if ($conn->query($sql) === TRUE) {
			echo "<p>Post Successfully Published!!<br /><br /><a href='add_tag.php'>Add Another Tag</a><br /><a href='add_post.php'>Add Blog Post</a><br /><a href='adminaccount.php'>View Dashboard</a></p>";
			die();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>