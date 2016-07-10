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

$displaypost = "SELECT * FROM posts ORDER BY date_published DESC";
$result = $conn->query($displaypost);

$conn->close();
?>

<html>

<title>Tabaching's Blog: Welcome</title>

<head>

</head>

<body>
<h3>Welcome to Tabaching's Blog</h3>
<p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
<?php

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$pid = $row['id'];
		$pttl =$row['post_title'];
		$ptg =$row['post_tag'];
		$pctn = $row['post_content'];
		$dtpub =$row['date_published'];
		$modified =$row['post_update'];
		$author = $row['author'];
		$thumbnail = $row['thumbFile'];
		
		$exploded_tags = explode(",", $ptg);
		
		//READ MORE CODE STARS HERE
		$string = strip_tags($pctn);
		
		if (strlen($string) > 500) {

			// truncate string
			$stringCut = substr($string, 0, 500);

			// make sure it ends in a word so assassinate doesn't become ass...
			$string = substr($stringCut, 0, strrpos($stringCut, ' '))."... <a href='view_live.php?id=$pid&title=$pttl'>Read More</a>"; 
		}
		//READ MORE CODE ENDS HERE
		
		$height = 64;
		$width = 64;
		
		echo "<img src='thumbs/$thumbnail' height='$height' width='$width' style='float: left; position: relative; top: 7px; padding-right: 8px;'>";
		echo "<p><b><h3 style='color:red;'>$pttl</h3></b></p>";
		echo "<p>$string</p><hr />"; // APPLY THE READ MORE CODE HERE
		echo "<b>Tags: </b>";
		foreach( $exploded_tags as $elem ) {
			echo "<a href='tag_display_post.php?id=$elem'>$elem</a>&nbsp;";
		}
		echo"| <b>Published on:</b> $dtpub | <b>Author: </b>$author<br/></p>";
		echo "<hr />";
    }
} else {
    echo "0 results";
}
?>

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