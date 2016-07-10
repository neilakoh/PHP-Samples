<?php

include_once('setup/conn.php');

if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
} else {
	$page=1; 
};
	
$start_from = ($page-1) * 10;

//$displaypost = "SELECT *,count(posts.post_id) as Total FROM posts JOIN comments WHERE posts.post_id = comments.post_id GROUP BY posts.post_id";
$getpost = "SELECT * FROM posts ORDER BY date_published DESC LIMIT $start_from, 10";
$result1 = $conn->query($getpost);

$countdata = "SELECT COUNT(post_content) FROM posts";
$countresult = $conn->query($countdata);

if ($result1->num_rows > 0) {

	while($row = $result1->fetch_assoc()) {
	
		$postid = $row['post_id'];
		$posttitle = $row['post_title'];
	
		echo "<p>Post ID: $postid</p>";
		echo "<p>Post Title: $posttitle</p>";
		
		$getcomment = "SELECT COUNT(*) as Total FROM comments WHERE post_id = '$postid'";
		//$getcomment = "SELECT *, COUNT(posts.post_id) as Total FROM posts JOIN comments WHERE posts.post_id = comments.post_id GROUP BY posts.post_id";
		$result2 = $conn->query($getcomment);
		$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
		
		$msg = $row2['Total'];
		echo "<p>Comments: $msg</p>";	
	}
	
	$countrow = mysqli_fetch_row($countresult); 
	$total_records = $countrow[0];
	$total_pages = ceil($total_records / 10);
	
	for ($i=1; $i<=$total_pages; $i++) { 
	
		echo "<a href='sample.php?page=".$i."'>".$i."</a> "; 

	};
	
} else {
echo "0 results";
}
?>

<!DOCTYPE>
<html>
<head>
    <title>Some Title</title>
<style>
:target {
    background-color: yellow;
}
</style>
</head>
<body>
<ul>
    <li><a id="news" href="sample.php">News</a></li>
    <li><a id="games" href="sample.php#games">Games</a></li>
    <li><a id="science" href="sample.php#science">Science</a></li>
</ul>
<h1>Stuff about science</h1>
<p>lorem ipsum blah blah</p>
</body>
</html>


getting the first and last number of the loop
<?php
echo "<div class='pagelinks'>";
			
			//Get the last and the first number of a loop
			for ($p=1; $p<=$total_pages; $p++) {
				$num[] = $p;
				$lastPage = count($num);
				$firstPage = $num[0];
			}
			
			echo "<a href='index.php?page=".$firstPage."#fpage' id='fpage'>First Page</a> ";
			for ($i=1; $i<=$total_pages; $i++) {
				echo "<a href='index.php?page=".$i."#$i' id='".$i."'>".$i."</a> ";
			};
			
			echo "<a href='index.php?page=".$lastPage."#lpage' id='lpage'>Last Page</a> ";
			
			echo "</div>";
			
		
		?>
?>