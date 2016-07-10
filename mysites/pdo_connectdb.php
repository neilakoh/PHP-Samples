<?php

include('config.php');

$displaypost = "SELECT post_title FROM posts WHERE id='79'";
$result = $conn->query($displaypost);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$posttitle = $row['post_title'];
		echo "$posttitle";
		}
} else {
    echo "0 results";
}
$conn->close();
 
?>